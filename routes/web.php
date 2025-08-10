<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'produtos' => App\Http\Controllers\ProdutoController::class,
]);
