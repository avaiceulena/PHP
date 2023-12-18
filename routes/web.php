<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoppingItemController;


Route::get('/', [ShoppingItemController::class, 'index']);
Route::get('/items/create', [ShoppingItemController::class, 'create']);
Route::post('/items', [ShoppingItemController::class, 'store']);
Route::get('/items/{id}/edit', [ShoppingItemController::class, 'edit']);
Route::put('/items/{id}', [ShoppingItemController::class, 'update']);
Route::delete('/items/{id}', [ShoppingItemController::class, 'destroy']);

?>

