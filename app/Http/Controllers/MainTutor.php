<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainTutor extends Controller
{
    public function create(){

        return view('Main.Main_Tutor');
    }
}
