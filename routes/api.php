<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProfileController;

Route::get('/me', [ProfileController::class, 'index']);
