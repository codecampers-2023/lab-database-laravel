<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\ProjectController;
use App\HTTP\Controllers\TaskController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', [ProjectController::class,'index'])->name('projects');
Route::get('/projects/store', [ProjectController::class,'store'])->name('store');
Route::get('/tasks', [TaskController::class,'index'])->name('tasks');