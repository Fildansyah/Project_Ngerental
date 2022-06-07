<?php

namespace App\Http\Controllers;

use App\Models\CarDetail;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('home');
        $CarDetail=CarDetail::all();
        return view('home',compact ('CarDetail'));
    }

    
}
