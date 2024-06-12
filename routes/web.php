<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ContatoController;

/*Route::get('/', function () {
    return view('index');
});*/
Route::get("/", [ContatoController::class, "index"]);
Route::get("/editar/{id}", [ContatoController::class, "editar"]);
Route::get("/excluir/{id}", [ContatoController::class, "excluir"]);
Route::post('/cadastrar', [ContatoController::class, 'cadastrar']);
Route::post("/atualizar/{id}", [ContatoController::class, "atualizar"]);
