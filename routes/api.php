<?php

use App\Http\Controllers\CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('cars', CarController::class)->except(['create', 'edit']);

// Route::get('cars', [CarController::class, 'index']);
// Route::get('cars/create', [CarController::class, 'create']);
// Route::post('cars', [CarController::class, 'store']);
// Route::get('cars/{car}', [CarController::class, 'show']);
// Route::get('cars/{car}/edit', [CarController::class, 'edit']);
// Route::put('cars/{car}', [CarController::class, 'update']);
// Route::delete('cars/{car}', [CarController::class, 'destroy']);