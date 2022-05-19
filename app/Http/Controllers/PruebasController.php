<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebasController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function portafolio()
    {
        return view('home.portfolio-details');
    }

    public function inner()
    {
        return view('home.inner-page');
    }
}
