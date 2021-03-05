<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function validateFields(){
        return request()->validate([
            'name' => ['required','min:3'],
            'description' => 'required'
            
        ]);
    }
    public function index(){
        $response = Todo::all();
        return view('todos.index',[
            'todos' => $response
        ]);
    }
    public function create(){
        return view('todos.create');
    }

    public function store(){
        // dd(request()->all());
        $validatedFields = $this->validateFields();
        Todo::create($validatedFields);

        return redirect('/todos');
        
    }

    public function destroy($todoId){
        $todo = Todo::find($todoId);
        if(!$todo)
            abort(404);
        $todo->delete();

        return redirect('/todos');
    }
}
