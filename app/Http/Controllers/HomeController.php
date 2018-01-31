<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.home');
    }

    public function profil ($username)
    {
        $usernya = User::where('username',$username)->get();
        return $usernya;
    }

    public function umah()
    {
        $this->authorize('access.backend');
        return 'berhasil';
    }

    public function griyo()
    {
        if (auth()->user()->can('access.backend2')) {
            //return view('users.create');
            return 'berhasil';
        }


        return abort(403);

    }
}
