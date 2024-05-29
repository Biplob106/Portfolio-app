<?php

namespace App\Http\Controllers\Admin;
use App\Models\HomePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('admin.HomePage.banner');
    }
    public function store()
    {

    }
}
