<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Todo;

class ToDoController extends Controller
{
  public function create(){
    $todo = new Todo;
    $actionUrl = route('todo.store');
    return view('todo.create', ['todo'=>$todo, 'actionUrl'=>$actionUrl]);
  }

  public function store(Request $request){
    $todo = new Todo;
    $todo->user_id = Auth::user()->id;
    $todo->title = $request->title;
    $todo->description = $request->description;
    $todo->date = Carbon::parse($request->date);
    $todo->save();
    return redirect()->route('home');
  }

  public function edit(Request $request){
    $todo = Todo::find($request->id);
    $actionUrl = route('todo.id.update', ['id'=>$todo->id]);
    return view('todo.edit', ['todo'=>$todo, 'actionUrl'=>$actionUrl]);
  }


  public function update(Request $request){
    $todo = Todo::find($request->id);
    $todo->title = $request->title;
    $todo->description = $request->description;
    $todo->date = Carbon::parse($request->date);
    $todo->save();
    return redirect()->route('home');
  }

  public function delete(Request $request){
    $todo = Todo::find($request->id);
    $todo->delete();

    return redirect()->route('home');
  }



  
}
