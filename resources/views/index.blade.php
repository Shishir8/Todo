@extends('layout.app')

@section('title')
   Todo List

@endsection

@section('content')
   <h1 class="text-center my-5">Task List</h1>
   <div class="row justify-content-center">

     <div class="col-md-8">
      <div class="alert alert-success">
      @if(session('success'))
    {{session('success')}}
@endif
</div>
      <div class="card card-default">
        <div class="card-header">
           Todos
        </div>
        <div class="card-body">
          <ul class="list-group">
            <li>Task1</li>
            <li>Task2</li>
            <li>Task3</li>
            <li>Task4</li>
          </ul>
        </div>
      </div>
     </div>
     </div>
@endsection