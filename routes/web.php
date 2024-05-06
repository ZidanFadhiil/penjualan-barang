<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::resource('barang', BarangController::class);
Route::get('/barang/{barang}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::delete('/barang/{barang}', [BarangController::class, 'destroy'])->name('barang.destroy');



Route::get('/', function () {
    return view('welcome');
});
