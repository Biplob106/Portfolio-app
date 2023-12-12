<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;




Route::get('/', function () {
    return view('welcome');
});

//Admin Routes

Route::get('/Admin/dashboard',[AdminHomeController::class,'index'])->name('admin.index');
Route::get('/admin/login',[AdminLoginController::class,'index'])->name('admin.login');
Route::get('/admin/forgot-password',[AdminLoginController::class,'forgot_password'])->name('admin.forgot-password');