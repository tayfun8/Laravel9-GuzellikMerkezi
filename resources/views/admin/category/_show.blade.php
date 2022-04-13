@extends('layouts.adminbase')

@section('title', 'Show Category')

@section('content')

<div class="main-panel">
    <!-- en üstte olmak zorunda footer altında bittiği için div in kapaması burada açılması gerek -->

    <div class="content">
        <div class="row mt-3 ml-2"> 
            <div class="col-md-4">
            <a style="height: 40px; display:flex; justify-content:center; align-items:center;" class="btn btn-block btn-info btn-sm" href="/webpanel/category/edit/{{$data->id}}"><b>Edit</b></a>
            </div>
            <div class="col-md-8"">
                 <a style="height: 40px; width: 400px; display:flex; justify-content:center; align-items:center;" class="btn btn-block btn-danger btn-sm" href="/webpanel/category/delete/{{$data->id}}"><b>Delete</b></a>
            </div>
        </div>
        
    <div class="card ml-2 mt-3">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <tbody>
                  <tr>
                     <th style="width: 60px;">Id</th>
                      <td>{{$data->id}}</td>
                    </tr>
                    <tr>
                     <th>Title</th>
                      <td>{{$data->title}}</td>
                    </tr>
                    <tr>
                     <th>Keywords</th>
                      <td>{{$data->keywords}}</td>
                    </tr>
                    <tr>
                     <th>Image</th>
                      <td>{{$data->image}}</td>
                    </tr>
                    <tr>
                     <th>Status</th>
                      <td>{{$data->status}}</td>
                    </tr>
                    <tr>
                     <th>Created At</th>
                      <td>{{$data->created_at}}</td>
                    </tr>
                    <tr>
                     <th>Updated At</th>
                      <td>{{$data->updated_at}}</td>
                    </tr>
                
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
    
    </div>

   

@endsection()