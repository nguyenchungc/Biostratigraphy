<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function getRegister(){
        return view('pages.register');
    }
}
