<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('frontpage.landingpage', ['title' => "Landing Page"]);
    }

    function page(){
        return view('frontpage.page', ['title' => 'page']);
    }
    
}
