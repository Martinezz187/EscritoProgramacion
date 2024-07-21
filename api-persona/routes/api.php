<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\http\controllers\api\PersonaController;

Route::get('/personas', [PersonaController::class, 'index']);


Route::get('/personas/{id}', [PersonaController::class, 'show']);

Route::post('/personas', [PersonaController::class, 'store']);

Route::delete('/personas/{id}', [PersonaController::class, 'destroy']);  

Route::put('/personas/{id}',[PersonaController::class, 'update']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
