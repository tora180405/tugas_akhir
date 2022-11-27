<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function() {
    return view('dashboard');
});

Route::get('historypembayaran', function() {
    return view('historypembayaran');
});

Route::get('pembayaran', function() {
    return view('pembayaran');
});

Route::get('profilsiswa', function() {
    return view('profilsiswa');
});

Route::get('statuspembayaran', function() {
    return view('status_pembayaran');
});

Route::get('datasiswa', function() {
    return view('datasiswa');
});

Route::get('login', function() {
    return view('login');
});

Route::get('registrasi', function() {
    return view('register');
});

Route::get('datadiri', function() {
    return view('dataregistrasi');
});
