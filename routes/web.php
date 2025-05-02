<?php

//Route::get('/listbarang/{id}/{nama}', function ($id, $nama) {
  //  return view('list_barang', compact('id', 'nama'));
// });

//use App\Http\Controllers\ListBarangController;

//Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

use Illuminate\Support\Facades\Route;

// Route untuk halaman Welcome (yang ada gambar dan CSS)
Route::get('/', function () {
   return view('welcome');
});



//use App\Http\Controllers\ProductController;

//Route::get('/products', [ProductController::class, 'show']);


//use App\Http\Controllers\ListBarangController;

//Route::get('/barang', [ListBarangController::class, 'tampilkan']);






