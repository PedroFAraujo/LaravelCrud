<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('index');
});

Route::post('/cadastrar', [ContatoController::class, 'cadastrar']);