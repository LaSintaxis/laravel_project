<?php
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;

Route::apiResource('categorias', CategoriaController::class);
Route::apiResource('subcategorias', CategoriaController::class);
Route::apiResource('productos', ProductoController::class);
Route::apiResource('usuarios', UserController::class);
