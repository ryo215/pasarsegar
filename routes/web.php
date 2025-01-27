<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/produk', function () {
    return view('produk');
})->name('produk');
Route::get('/keranjang', function () {
    return view('keranjang');
})->name('keranjang');

Route::get('/admin', function () {
    return view('admin.index');
});