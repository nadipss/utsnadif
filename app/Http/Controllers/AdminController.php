<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() 
    {
        return view('admin.dashboard');
    }
    public function calendar() 
    {
        return view('admin.calendar');
    }
    public function form() 
    {
        return view('admin.form');
    }
    public function table() 
    {
        return view('admin.table');
    }
    public function notification() 
    {
        return view('admin.notification');
    }
    public function login() 
    {
        return view('admin.login');
    }
}