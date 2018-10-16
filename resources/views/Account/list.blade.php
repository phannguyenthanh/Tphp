
@extends('layout')
@section('content')

















<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Account
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Account</a></li>
        
      </ol>
    </section>

    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body col-md-11">
            <form action="/Admin/Account/search" method="post">
                <input type="hidden"  name="_token" value="{{csrf_token()}}" >
                <input type="text" name="seach" >
                <button class="btn">tìm</button>
            </form>
   
    @if(isset($seach))
        <div>
            Từ khoá : <b>{{$seach}}</b>
        </div>
    @endif
    </div>
    <div class="col-md-1">
    <a href="/Admin/Account/add" class="btn btn-block btn-success">
        Thêm mới
    </a>
    </div>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>birthday</th>
                    <th>addr</th>
                    <th>wards</th>
                    <th>district</th>
                    <th></th>
        
                </tr>
               
                </thead>
                <tbody>
                @foreach($account as $value)
                <tr>
                <td> {{$value->id}} </td>
            <td> {{$value->name}} </td>
            <td> {{$value->birthday}} </td>
            <td> {{$value->addr}} </td>
            <td> {{$value->Wards->name}} </td>
            <td> {{$value->district->name}} </td>
            <td>
                <a href="/Admin/Account/edit/{{$value->id}}">sửa</a>|
                <a href="/Admin/Account/remove/{{$value->id}}">xoá</a>
            </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>id</th>
                    <th>name</th>
                    <th>birthday</th>
                    <th>addr</th>
                    <th>wards</th>
                    <th>district</th>
                    <th></th>
                </tr>
                </tfoot>
              </table>
            </div>
            <div>

                {{$account->links()}}
            </div>
            @if(isset($seach))
        <div>
        <a href="/Admin/Account/list"> <-- quay lại danh sách</a>
        </div>
    @endif
            <!-- /.box-body -->
          </div>
          
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    
      <!-- /.row -->
    </section>
    <!-- /.content -->
 




@endsection