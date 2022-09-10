<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('test-ajax', [HomeController::class, 'testAjax']);
Route::get('/', [HomeController::class, 'showBeranda']);
Route::get('/list', [HomeController::class, 'showList']);

Route::get('settings', [SettingsController::class, 'index']);
Route::post('settings', [SettingsController::class, 'store']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::resource('user', UserController::class);
    Route::prefix('products')->group(function () {
        Route::resource('pc', ProdukController::class);
        Route::post('pc/filter', [ProdukController::class, 'filter']);
    });
});

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('template', function () {
    return view('template.base');
});

//ECOMMERCE
Route::get('ecommerce', [ClientController::class, 'showHome']);
Route::get('shop', [ClientController::class, 'showShop']);
Route::get('cart', [ClientController::class, 'showCart']);
Route::get('checkout', [ClientController::class, 'showCheckout']);
Route::get('masuk', [ClientController::class, 'showMasuk']);
Route::get('konfirmasi', [ClientController::class, 'showKonfirmasi']);