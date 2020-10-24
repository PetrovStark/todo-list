<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::orderBy('updated_at', 'desc')->get();
        return view( "todos.index", compact('todos') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'title' => 'required',
          'content' => 'required',
          'due' => 'required'
      ]);

      $todo = new Todo;
      $todo->title = $request->input('title');
      $todo->content = $request->input('content');
      $todo->due = $request->input('due');
      $todo->save();

      return redirect('/')->with('sucess', 'Task "' . $todo->title . '" created sucessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show (Todo $todo)
    {
        return view( 'todos.show', compact('todo') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        return view( 'todos.edit', compact('todo') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'due' => 'required'
        ]);

        $todo = Todo::find($id);
        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->due = $request->input('due');
        $todo->save();

        return redirect('/')->with('sucess', 'Task "' . $todo->title . '" updated sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect('/')->with('sucess', 'Task "'. $todo->title .'" deleted sucessfully!');
    }
}
