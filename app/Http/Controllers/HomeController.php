<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function getRegister(){
        return view('pages.register');
    }
    function getmainpage(){
        //echo "hello";
        return view('pages.mainpage');
    }
    function inputdata(){
        return view('pages.inputdata');
    }
    function welcomePage(){
        return view('pages.wellcomePage');
    }
}
?>
