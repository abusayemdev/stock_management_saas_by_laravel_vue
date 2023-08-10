@extends('dashboard')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Update Category</li>
            </ol>
            <a href="{{route('category.index')}}" class="btn btn-sm btn-primary float-right mr-3"> All Categories</a>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
      
            <div class="col-lg-12">

                <!-- Horizontal Form -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Category Form</h3>
                       
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{route('category.update', $edit->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                          <div class="form-group row">
                              <label for="category_name" class="col-sm-3 col-form-label">Category Name</label>
                              <div class="col-sm-9">
                              <input type="text" name="category_name" class="form-control"  value="{{$edit->category_name}}">
                              </div>
                          </div>
    
                    
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Update</button>
                        
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->


               

                
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection