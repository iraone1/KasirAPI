<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/produks', [ProdukController::class, 'index']);
Route::post('/produks', [ProdukController::class, 'store']);
Route::get('/produks/{produk}', [ProdukController::class, 'show']);
Route::put('/produks/{produk}', [ProdukController::class, 'update']);
Route::delete('/produks/{produk}', [ProdukController::class, 'destroy']);
