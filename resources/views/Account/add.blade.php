@extends('layout')
@section('content')

    <!-- <div>
        <h4>tạo bảng</h4>
    </div>


    <div>
        @if(count($errors)>0)
            <div style="color:red;">
                @foreach($errors->all() as $value)
                    {{$value}}
                    <br>
                @endforeach
            </div>
        @endif
        @if(session('alert'))
			<div style='color:green' >
				{{session('alert')}}
			</div>
			@endif
    </div>
    <div>
        <form action="/Admin/Account/add" method="post">
        <input type="hidden"  name="_token" value="{{csrf_token()}}" >
            <div>
                <label for="">tên</label>
                <input name="name" type="text">
            </div>
            <div>
                <label for="">ngày sinh</label>
                <input  name="birthday" type="date">
            </div>
            <div>
                <label for="">Địa chỉ</label>
                <input name="addr" type="text">
            </div>
            <div>
                <label for="">xã/phường</label>
                
                    <select name="wards_id" id="">
                        @foreach($wards as $value )
                        <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>


                
            </div>
            <div>
                <label for="">tỉnh/huyện</label>
              
                    <select name="district_id" id="">
                        @foreach($district as $value )
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>


               
            </div>
            
            
            <div>
                <button>
                    submid
                </button>
            </div>
            
        </form>
    </div>
    <div style="margin-top:90px">
        <a href="/Admin/Account/list"> quay lại danh sách</a>
    </div> -->












<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Account
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Account</a></li>
        <li class="active">Add</li>
      </ol>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
     
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div>
        @if(count($errors)>0)
            <div class="alert alert-danger alert-dismissible" >
                @foreach($errors->all() as $value)
                    {{$value}}
                    <br>
                @endforeach
            </div>
        @endif
        @if(session('alert'))
			<div class="alert alert-success alert-dismissible" >
				{{session('alert')}}
			</div>
			@endif
    </div>
  
            <form class="form-horizontal" action="/Admin/Account/add" method="post">
            <input type="hidden"  name="_token" value="{{csrf_token()}}" >
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tên</label>

                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Tên">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Ngày sinh</label>

                  <div class="col-sm-10">
                    <input type="date" name="birthday" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Địa chỉ</label>

                  <div class="col-sm-10">
                    <input type="text" name="addr" class="form-control" id="inputPassword3" placeholder="Địa chỉ">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">xã/phường</label>

                  <div class="col-sm-10">
                  

                     <select class="form-control" name="wards_id" id="" >
                        @foreach($wards as $value )
                        <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>

                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">tỉnh/huyện</label>

                  <div class="col-sm-10">
                 


                     <select class="form-control" name="district_id" id="">
                        @foreach($district as $value )
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>


                  </div>
                </div>
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <a href="/Admin/Account/list" class="btn btn-default">
                    Quay lại
                </a>
                <button type="submit" class="btn btn-info pull-right">Thêm</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
      
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->




@endsection