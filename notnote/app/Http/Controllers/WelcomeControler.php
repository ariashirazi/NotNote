<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeControler extends Controller
{
    public function welcome(){

        return view('welcome');

    }
    //
}
