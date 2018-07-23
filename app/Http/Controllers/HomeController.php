<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function getRegister(){
        return view('pages.register');
    }
    function getmainpage(){
        echo "hello";
        //return view('pages.mainpage');
    }
}
?>
