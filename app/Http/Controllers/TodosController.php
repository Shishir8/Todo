<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index')->with('todos',Todo::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(),[
        'title' => 'required',
        'description' => 'required'
        
        ]);
        $data = request()->all();
        $todo = new Todo();
        $todo->title = $data['title'];
        $todo->description = $data['description'];
        $todo->save();
        
        session()->flash('success',"Data save successfully");
        return redirect('\todos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        return view('show')->with('todo',$todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(todo $todo)
    {
        return view('edit')->with('todo',$todo);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Todo $todo)
    {
        $this->validate(request(),[
            'title' => 'required',
            'description' => 'required'
            
            ]);
            $data = request()->all();
        
            $todo->title = $data['title'];
            $todo->description = $data['description'];
            $todo->save();
            
            session()->flash('success',"Data Update successfully");
            return redirect('/todos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        session()->flash('delete',"Task delete successfully.");
        return redirect('/todos');
    }
}
