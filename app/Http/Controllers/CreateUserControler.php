<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CreateUserControler extends Controller
{
    public function create()
    {
        return view('create_user');
    }
    public function save(Request $request)
    {
        
        $usuario_criado =User::create($request->all());
        //dd($usuario_criado);
        return redirect()->back()->with("user",$usuario_criado);
    }

    public function new()
    {
        return view('newuser');
    }
    
    public function login()
    {
        return view('login');
    }

    
}


