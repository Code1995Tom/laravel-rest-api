<?php

use Illuminate\Support\Facades\Route;

Route::post('/reset', [App\Http\Controllers\ResetController::class, 'reset']);
Route::get('/balance/{id}', [App\Http\Controllers\BalanceController::class,'show']);
Route::post('/event', [App\Http\Controllers\EventController::class, 'store']);
