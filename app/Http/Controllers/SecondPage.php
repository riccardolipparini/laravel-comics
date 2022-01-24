<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondPage extends Controller
{
    public function secondPage(){

        return view('blades.SecondPage');
    }
}
