<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    function index(){
        $data['user'] = Auth::user();
        return view('setting.index');
    }

    function store(){
        if(request('current')){
            $user = Auth::user();
            $check = Hash::check(request('current'), $user->password);
            if($check){
                if(request('new') == request('confirm')){

                    $user->password = request('new');
                    $user->save();

                    return back()->with('success', 'Password Berhasil Diganti');

                }else{
                    return back()->with('danger', 'Password Baru Tidak Cocok');
                }
            }else {
                return back()->with('danger', 'Password Sekarang Salah');
            }
        }else{
            return back()->with('danger', 'Password Kosong');
        }
    }
}