<?php

namespace App\http\Controllers;

use Illuminate\http\Request;

use App\User;

use Illuminate\support\facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function simpanuser(Request $request)
    {
       $user = User::create([
           'nama' => $request-> nama,
           'email' => $request->email,
           'password' => bcrypt ($request->password)
       ]);

       return redirect('/register');
    }

    public function login()
    {
        return view('login');
    }

    public function ceklogin(request $request)
    {
      if (!Auth::attempt([
        'email' => $email->email,
        'password' => $password ->password
       ]))
    
      {
        return redirect('/login');
      }
      else
      {
         return "Berhasil Login";
      }

    }
}