<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProfileController;

// Default welcome route (optional)
Route::get('/', function () {
    return response()->json([
        'message' => 'Welcome to HNG Profile API. Visit /me to see profile data.'
    ]);
});

// Your main API route
Route::get('/me', [ProfileController::class, 'index']);
