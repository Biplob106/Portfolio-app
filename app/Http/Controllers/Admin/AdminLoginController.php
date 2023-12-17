<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Auth;

class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function forgot_password()
    {
        return view('admin.forgot_password');
    }

}