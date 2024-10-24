<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


// routing untuk menampilkan halaman template.blade.php
Route::view('tampilan', 'template.template');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('kategori', KategoriController::class);
Route::resource('produk', ProdukController::class);
