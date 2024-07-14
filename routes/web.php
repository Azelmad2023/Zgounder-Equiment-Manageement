<?php

use App\Http\Controllers\EquipmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/welcome');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/dash', function () {
    return view('dashboard');
});
Route::resource('equipment', EquipmentController::class);
