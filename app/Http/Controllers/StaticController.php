<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaticController extends Controller
{
    public function index ()
    {
        return 'index';
    }

    public function about(){
        \Flash::success('about');
        return view('front.about');
    }
}
