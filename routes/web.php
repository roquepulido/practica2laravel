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
    return view('welcome2');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/catalogo', function () {
        return view('catalogo');
    })->name('catalogo');
    Route::get('/ventas', function () {
        return view('ventas');
    })->name('ventas');
    Route::get('/carrito', function () {
        return view('carrito');
    })->name('carrito');
    Route::get('/contacto', function () {
        return view('contacto');
    })->name('contacto');
});
