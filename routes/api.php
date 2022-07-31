<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('/{path}', function() {
//   return response('', 200)
//       ->header(
//         'Access-Control-Allow-Headers', 
//         'Origin, Content-Type, Content-Range, Content-Disposition, Content-Description, X-Auth-Token, X-Requested-With')
//       ->header('Access-Control-Allow-Methods', 'POST, GET, PUT, OPTIONS, DELETE')
//       ->header('Access-Control-Allow-Origin','http://127.0.0.1:8000')
//       ->header('Access-Control-Allow-Credentials',' true');
// })->where('path', '.*');

Route::get('/buku', [BookController::class, 'index']); //mengambil data

Route::post('/buku/store', [BookController::class, 'store'], function(){
    return response('', 200)
      ->header(
        'Access-Control-Allow-Headers', 
        'Origin, Content-Type, Content-Range, Content-Disposition, Content-Description, X-Auth-Token, X-Requested-With')
      ->header('Access-Control-Allow-Methods', 'POST, GET, PUT, OPTIONS, DELETE')
      ->header('Access-Control-Allow-Origin','http://127.0.0.1:8000')
      ->header('Access-Control-Allow-Credentials',' true');
}); //menyimpan data
Route::get('/buku/show/{id}', [BookController::class, 'show']); //mengambil data by id (detail data)
Route::put('/buku/update/{id}', [BookController::class, 'update']); //update data
Route::delete('/buku/destroy/{id}', [BookController::class, 'destroy']); //hapus data