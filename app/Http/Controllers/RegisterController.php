<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.register', [
            'title' => 'Register'
        ]);
    }

    public function register(Request $request)
    {
        $validatedDate = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);


        $validatedDate['password'] = bcrypt($validatedDate['password']);
        User::create($validatedDate);

        $request->session()->flash('success', 'Register Berhasil');

        return redirect('/login');
    }
}
