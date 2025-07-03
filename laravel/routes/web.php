<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', [TodoListController::class, 'index']);
Route::resource('tasks', TaskController::class);
