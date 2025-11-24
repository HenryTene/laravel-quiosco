<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/categorias', CategoriaController::class);

Route::get('/login', function () {
    return response()->json(['error' => 'Unauthenticated'], 401);
})->name('login');


# Este codigo hace lo siguiente:
Route::get('/categorias', [CategoriaController::class, 'index']);
