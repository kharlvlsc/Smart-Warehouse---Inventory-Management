<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/predict-delivery-time', [DeliveryController::class, 'predict']);