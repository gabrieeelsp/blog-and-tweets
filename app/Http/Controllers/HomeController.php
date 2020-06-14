<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entry;
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
     */
    public function index()
    {
        $entries = Entry::where('user_id', auth()->id())->get();
        return view('home', compact('entries'));
    }
}
