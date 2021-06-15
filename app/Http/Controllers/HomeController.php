<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        return view('home');
    }
    public function works()
    {
        return view('works');
    }
    public function offers()
    {
        return view('offers');

    }
    public function contacts()
    {
        return view('contacts');
    }

    public function montage()
    {
        return view('montage');
    }

    public function about_us()
    {
        return view('about-us');
    }





}
