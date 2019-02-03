<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function sport(){
        return view('pages.sport');
    }
    public function technology(){
        return view('pages.technology');
    }
    public function artish(){
        return view('pages.artish');
    }
}
