function Cargar() {
    $(function () {
        $(document).ready(function() {
            $('#datatable').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.11.1/i18n/es_es.json"
                },
                "autoWidth": true
            });
        });
    });
}

Cargar();