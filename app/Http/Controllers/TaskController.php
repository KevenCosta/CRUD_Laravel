<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        // $tasks=Task::all();
        $tasks=Task::paginate();
        return view('tasks.index', compact('tasks'));
    }


    public function create()
    {
        return view('tasks.create');
    }


    public function store(Request $request)
    {
        Task::create($request->all());
        return redirect()->route('tasks.index');
        // dd is to debug in front
        // dd($request->all());
    }

    //$task recebido no parametro é o task do banco completo
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }


    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return redirect()->route('tasks.index');
    }


    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
