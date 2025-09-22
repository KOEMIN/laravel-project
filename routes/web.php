<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index']);

use App\Http\Controllers\ItemController;


Route::get('/items', [ItemController::class, 'index'])->name('items.index');

?>