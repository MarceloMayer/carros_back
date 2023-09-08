<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContatoController;

Route::get('/', [HomeController::class, "home"]);

Route::get("/contato", [ContatoController::class, "list"]);
