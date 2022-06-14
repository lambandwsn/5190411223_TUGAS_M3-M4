<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }

    public function cekLogin(Request $request){
        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('home');
    }

    public function create(Request $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect('home');
    }
}
