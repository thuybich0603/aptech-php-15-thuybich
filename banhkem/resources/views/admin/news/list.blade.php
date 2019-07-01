@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể Loại
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Tên không dấu</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($theloai as tl)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$tl->id}}</td>
                                    <td>{{$tl->name}}</td>
                                    <td>{{$tl->unsign_name}}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="/admin/productType/xoa"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="/admin/productType/sua/{{$tl->id}}">Sửa</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection