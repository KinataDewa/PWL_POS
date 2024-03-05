<?php

use App\Http\Controllers\LevelController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('level');
});

Route::get('/level', [LevelController::class, 'index']);