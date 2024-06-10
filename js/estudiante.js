$(document).ready(function () {
    $('#add_nombre').on('keypress', function (event) {
        return validarTexto(event);
    });
    $('#add_apellido').on('keypress', function (event) {
        return validarTexto(event);
    });
    $('#add_edad').on('keypress', function (event) {
        return validarNumero(event);
    });
    $('#add_promedio').on('keypress', function (event) {
        return validarDecimal(event);
    });

    $(document).on('submit', '#formularioAdd', function (e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("formularioAdd", true);

        $.ajax({
            type: "POST",
            url: "ajax/estudiante.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                var res;
                try {
                    res = jQuery.parseJSON(response);
                } catch (e) {
                    console.log('Error: ' + e.message);
                    return;
                }
                alertify.set('notifier', 'position', 'top-right');
                if (res.status == 422) {
                    alertify.warning(res.message);
                } else if (res.status == 200) {
                    $('#modalAgregar').modal('hide');
                    $('#formularioAdd')[0].reset();
                    alertify.success(res.message);
                    cargarEstudiantes();
                } else if (res.status == 500) {
                    alertify.error(res.message);
                }
            }
        });
    });

    function cargarEstudiantes() {
        $.ajax({
            url: 'ajax/estudiante.php',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                // Limpiar el cuerpo de la tabla
                var table = $('#datatable').DataTable();
                table.clear();

                // Iterar sobre los productos y construir las filas de la tabla
                $.each(data, function (index, estudiante) {
                    var fila = '<tr>' +
                        '<td>' + estudiante.id + '</td>' +
                        '<td>' + estudiante.nombre + '</td>' +
                        '<td>' + estudiante.apellido + '</td>' +
                        '<td>' + estudiante.edad + '</td>' +
                        '<td>' + estudiante.promedio + '</td>' +
                        '</tr>';
                    table.row.add($(fila));
                });

                // Redibujar la tabla
                table.draw();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log('Error al cargar los estudiantes: ' + errorThrown);
            }
        });
    }

    cargarEstudiantes();

});

