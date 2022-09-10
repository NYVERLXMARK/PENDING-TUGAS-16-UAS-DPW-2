<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{

    function showLogin(){
        return view('template.section.login');
    }

    function loginProcess(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('template')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Silahkan Cek Kembali Email dan Password Anda');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('template');
    }

    function registration(){
        return view('daftar');
    }

    function forgotpassword(){

    }
}