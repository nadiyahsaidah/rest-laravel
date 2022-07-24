<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/buku', [BookController::class, 'index']); //mengambil data

Route::post('/buku/store', [BookController::class, 'store']); //menyimpan data
Route::get('/buku/show/{id}', [BookController::class, 'show']); //mengambil data by id (detail data)
Route::put('/buku/update/{id}', [BookController::class, 'update']); //update data
Route::delete('/buku/destroy/{id}', [BookController::class, 'destroy']); //hapus data