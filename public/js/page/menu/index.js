$(function () {
    $('#datatable_menu').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        serverSide: true,
        ajax: {
            url: BASE_URL+'/menu/get',
            type: 'GET'
        }
    });
});