<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;




Route::get('/', function () {
    return view('welcome');
});

//Admin Routes

Route::get('/Admin/dashboard',[AdminHomeController::class,'index'])->name('admin.index');
Route::get('/admin',[AdminHomeController::class,'view']);