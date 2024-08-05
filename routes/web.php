<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit', function (Illuminate\Http\Request $request) {
    return redirect('/')->with('success', 'Contato Recebido Com Sucesso');
});