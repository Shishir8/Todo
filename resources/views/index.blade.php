@extends('layout.app')

@section('title')
   Todo List

@endsection

@section('content')
   <h1 class="text-center my-5">Task List</h1>
   <div class="row justify-content-center">

     <div class="col-md-8">

      
      @if(session('success'))
    
      <div class="alert alert-success">
      {{session('success')}}
      </div>
  @endif
    @if(session('delete'))
    <div class="alert alert-danger">
    {{session('delete')}}

    </div>
  @endif

      <div class="card card-default">
        <div class="card-header">
           Todos
        </div>
        <div class="card-body">
          <ul class="list-group">
          @foreach($todos as $todo)
          <li>{{$todo->title}}</li>
          <!-- <p>{{$todo->description}}</p> -->
          <a href="/todos/{{$todo->id}}/delete" class = "btn btn-danger my-2"> Delete</a>
          <a href="/todos/{{$todo->id}}" class = "btn btn-info my-2"> view</a>

          @endforeach
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