<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;
use APP\Models\User;

class RegistrerControlTu extends Controller
{
    public function create(){

        return view('Auth.registrerT');
    }

    public function store(){
        $Code = User::create(request(['Code', 'Name','LastName', 'Ocupation', 'Telephone', 'Address', 'Facebook', 'Instagram', 'Twitter', 'Email', 'Password']));
        
        auth()->login($Code);
        return redirect()->to('/');

    }
}
