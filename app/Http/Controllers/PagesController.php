<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function mjere(){
        return view('pages.mjere');
    }

    public function vijesti(){
        return view('pages.vijesti');
    }

    public function statistika(){
        return view('pages.statistika');
    }

    public function iskustva(){
        return view('pages.iskustva');
    }

}

