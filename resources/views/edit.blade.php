@extends('layout.app')

@section('title')
    Update New Todo
@endsection


 
@section('content')
    <h1 class="text-center my-5">Create New Todo</h1>
    <div class="row justify-content-center">
    <div class="col-md-8">
       <div class="card card-default">
       <div class="card-header">
       Update New Todo 
       </div>

       <div class="card-body">
         <form action="/todos/{{$todo->id}}/update" method="post">
         @csrf
           <div class="form-group">
              <input name="title" type="text" class="form-control" placeholder="Task Title" value= {{$todo -> title}}>
           </div>
           <div class="form-group">
             <textarea name="description" class="form-control" placeholder="Description" cols="5" rows="5">{{$todo -> description}}</textarea>
           </div>

           <div class="form-group text-center">
             <button type="submit" class="btn btn-success">edit Todo</button>
           </div>
         </form>
       </div>
     </div>
    </div>  
    </div>
   
@endsection