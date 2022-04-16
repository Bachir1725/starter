<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SecondController extends Controller
{
    public function _construct(){
        $this ->middleware('auth')->except(showstring1());
    }

    public  function showstring0(){
        return 'static string 0';
    }
    public  function showstring1(){
        return 'static string 1';
    }
    public  function showstring2(){
        return 'static string 2';
    }
    public  function showstring3(){
        return 'static string 3';
    }
}
