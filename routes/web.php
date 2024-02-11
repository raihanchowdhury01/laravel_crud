<?php

use App\Http\Controllers\StudentController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'show'])->name('h');

Route::post('/', [StudentController::class, 'insert'])->name('home');
Route::get('/update/{id}', [StudentController::class, 'index'])->name('up');
Route::put('/update/{id}', [StudentController::class, 'update_action'])->name('ua');

Route::get('/delete/{id?}', [StudentController::class, 'delete'])->name('del');