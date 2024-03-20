<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\useController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{name}/{lastname?}',[useController::class, 'andre']);

Route::get('/{num1}/{op}/{num2}',[useController::class, 'calculo']);

Route::get('/{name1}/{lastname1?}/{age?}/{gender?}/{email?}/{telephone?}',[useController::class, 'dados']);

Route::get('/{descption}/{category}/{cost}',[useController::class, 'product']);