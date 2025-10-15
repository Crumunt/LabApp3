<?php

use App\Http\Controllers\InstructorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
   return view('welcome');
});

Route::resource('student', StudentController::class);

Route::resource('faculty', InstructorController::class);