<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('pages/home', compact('user'));
    }

    public function results()
    {
        $user = Auth::user();
        return view('pages/results', compact('user'));
    }
}
