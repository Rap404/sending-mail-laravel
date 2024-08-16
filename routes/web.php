<?php

use App\Http\Controllers\KirimEmailController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [KirimEmailController::class,"index"]);
