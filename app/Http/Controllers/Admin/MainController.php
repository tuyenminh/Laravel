<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('admin.home', [
            'title' => 'Trang Quản Trị Admin'
        ]);
    }
}
