<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PedidoController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', [AuthController::class, 'logout']);

    // Almacenar pedidos
    Route::apiResource('/pedidos', PedidoController::class);
});

// Rutas Públicas
Route::apiResource('/categorias', CategoriaController::class);
Route::apiResource('/productos', ProductoController::class);

// Autenticacion
Route::post('/registro', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/login', function () {
    return response()->json(['error' => 'Unauthenticated'], 401);
})->name('login');
