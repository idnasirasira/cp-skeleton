@extends('layouts.app')

@section('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('content')
    <div class="content-wrapper" style="min-height: 1200.88px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Menus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Menu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Table Menu</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped" id="table_menu">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Link</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody id="body_table_menu"></tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="datatable_menu" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No. </th>
                    <th>Name</th>
                    <th>Url</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Home</td>
                    <td>/</td>
                    <td>
                      <button class="p-2 m-1 badge bg-success"><i class="fa fa-pen"></i></button>
                      <button class="p-2 m-1 badge bg-danger"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection

@section('script')
    <!-- DataTables -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

    <script type="text/javascript">
      var $tableMenu = $('#table_menu');
      var $bodyTableMenu = $tableMenu.children('tbody#body_table_menu');

      axios.get(BASE_URL+'/menu/get').then((res) => {
        if(res.status == 200){
          var data = res.data;

          var listMenu = ``;

          data.forEach((item, index) => {
            listMenu += `
              <tr>
                <td>${index+1}.</td>
                <td>${item.name}</td>
                <td>${item.url}</td>
                <td class="flex">
                  <button class="p-2 m-1 badge bg-success"><i class="fa fa-pen"></i></button>
                  <button class="p-2 m-1 badge bg-danger"><i class="fa fa-trash"></i></button>
                </td>
              </tr>
              `;
          });
          
          $bodyTableMenu.append(listMenu);
        }
      })
    </script>

    <script src="{{asset('js/page/menu/index.js')}}"></script>
@endsection