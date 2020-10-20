<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('auth')->except('showString0');

    }

    public function  showString0(){
        return "Static String";
    }
    public function  showString1(){
    return "Static String";
}
}
