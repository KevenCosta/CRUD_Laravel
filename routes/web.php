<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

//user->routes->controllers->view
Route::get('tasks', [TaskController::class, 'index'])-> name('tasks.index');

Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('tasks/create', [TaskController::class, 'create'])-> name('tasks.create');

Route::get('tasks/{task}', [TaskController::class, 'show'])-> name('tasks.show');

Route::put('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])-> name('tasks.edit');
Route::delete('tasks/{task}', [TaskController::class, 'destroy'])-> name('tasks.destroy');

//Call all method of task. If use below line, need comment all lines above(task)
//Route::resource('tasks', [TaskController::class]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
