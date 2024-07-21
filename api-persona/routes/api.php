<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/personas', function ()  {
    return 'Lista de personas';
});

Route::get('/personas/{id}', function ()  {
    return 'Busqueda de una persona';
});

Route::post('/personas', function ()  {
    return 'Agregar personas';
});

Route::delete('/personas/{id}', function ()  {
    return 'Eliminar personas';
});

Route::put('/personas/{id}', function ()  {
    return 'Actualizar personas';
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
