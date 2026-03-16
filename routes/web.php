<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
// use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\PageController::class, 'index']);

Route::get('/level', [App\Http\Controllers\LevelController::class, 'index']);
Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index']);

Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);

Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);

Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

Route::get('/category', [App\Http\Controllers\ProductController::class, 'products']);

Route::prefix('category')->group(function () {
    Route::get('/fnb', [App\Http\Controllers\ProductController::class, 'fnb']);
    Route::get('/beauty-health', [App\Http\Controllers\ProductController::class, 'beautyhealth']);
    Route::get('/home-care', [App\Http\Controllers\ProductController::class, 'homecare']);
    Route::get('/baby-kid', [App\Http\Controllers\ProductController::class, 'babykid']);
});

Route::get('/sales', [App\Http\Controllers\SalesController::class, 'sales']);
