@extends('layout.app')

@section('title')
    {{$todo->title}}

@endsection

@section('content')
        <div class="row justify-content-center">
            <div class="cod-md-6">
                <div class="card card-default">
                    <div class="card-header">
                         view
                    </div>
                    <div class="card-body">
                    {{$todo->title}}
                         {{$todo->description}}
                         <a href="/todos/{{$todo->id}}/delete" class = "btn btn-danger">Delete</a>
                         <a href="/todos/{{$todo->id}}/edit" class = "btn btn-success">Edit</a>

                    </div>
                </div>
            </div>
        </div>
    @endsection