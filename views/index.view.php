<!doctype html>
<html lang="en">

<head>
    <title>Productos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/estilos.css" />

    <!-- CSS Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">

    <!-- Icon Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Alertify -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- Script jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregar" aria-pressed="false" autocomplete="off">
                            <i class="bi bi-plus-circle-fill"></i> Agregar Nuevo Estudiante
                        </button>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class="card-title">Mantenimiento de Estudiantes</h4>
                            </div>
                        </div>

                        <!-- Agregar el input de búsqueda y el botón de búsqueda -->

                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-hover tablaProductos">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Edad</th>
                                        <th>Promedio</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-muted">Estudiantes</div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="defaultModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title text-light" id="defaultModalLabel">Agregar Nuevo Estudiante</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formularioAdd" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="add_nombre" class="form-label">Nombre:</label>
                            <input type="text" name="add_nombre" id="add_nombre" class="form-control" placeholder="Nombre del Estudiante" required>
                        </div>
                        <div class="mb-3">
                            <label for="add_marca" class="form-label">Apellido:</label>
                            <input type="text" name="add_apellido" id="add_apellido" class="form-control" placeholder="Apellido del Estudiante" required>
                        </div>
                        <div class="mb-3">
                            <label for="add_edad" class="form-label">Edad:</label>
                            <input type="text" name="add_edad" id="add_edad" class="form-control" placeholder="Edad del Estudiante" required>
                        </div>
                        <div class="mb-3">
                            <label for="add_precio" class="form-label">Promedio:</label>
                            <input type="text" name="add_promedio" id="add_promedio" class="form-control" placeholder="" required>
                        </div>

                        <input type="submit" value="Guardar Cambios" class="btn btn-primary">
                    </form>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_estudiante" id="id_estudiante">
                    <input type="hidden" name="operacion" id="operacion">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- Validaciones -->
    <script src="js/validacion.js"></script>

    <!-- Scripts Productos -->
    <script src="js/estudiante.js"></script>

    <!-- Cargar Datatable -->
    <script src="js/datatable.js"></script>

    <!-- Script Datatable -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>

</body>

</html>