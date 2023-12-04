<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $images = [
            asset('assets/Images/homeImages/carousel0.jpg'),
            asset('assets/Images/homeImages/carousel1.jpg'),
            asset('assets/Images/homeImages/carousel2.jpg'),
            asset('assets/Images/homeImages/carousel3.jpg'),
        ];

        return view('home', compact('images'));
    }
}
