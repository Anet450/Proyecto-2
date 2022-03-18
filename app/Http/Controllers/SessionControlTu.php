<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionControlTu extends Controller
{
    public function create(){

        return view('Auth.logingT');
    }
}
