<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request){
        //dd($request);  
        //dd($request->get('email'));

        // Modificar Request
        // Error: Call to a member function add() on null
        // $request->$request->add(['username' => Str::slug( $request->username )]);

        //Validación
        $this->validate($request,[
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'username' => Str::slug( $request->username ),
            'email' => $request->email,
            'password' => $request->password
            // 'password' => Hash::make($request->password) [VERSION 9]
            
        ]);

        // Autenticar un usuario
        // auth()->attempt([
        //     'email' => $request->email,
        //     'password' => $request->password
        // ]);

        //Otra forma de autenticar un usuario
        auth()->attempt($request->only('email','password'));

        // Redireccionar
        return redirect()->route('posts.index');
    }
}
