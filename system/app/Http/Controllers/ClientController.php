<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    function showHome(){
        return view('ecommerce.index');
    }

    function showShop(){
        return view('ecommerce.shop');
    }

    function showCart(){
        return view('ecommerce.cart');
    }

    function showCheckout(){
        return view('ecommerce.checkout');
    }

    function showMasuk(){
        return view('ecommerce.login');
    }

    function showKonfirmasi(){
        return view('ecommerce.konfirmasi');
    }
}