<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource("/empresa", EmpresaController::class);
Route::apiResource("/producto", ProductoController::class);