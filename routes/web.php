<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactsController;

Route::get('/', function () {
    return view('welcome');
});


route::resource('/student',StudentController::class);
route::resource('/contact',ContactsController::class);
route::get('/create',[StudentController::class,'create']);