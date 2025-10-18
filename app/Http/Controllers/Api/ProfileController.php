<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class ProfileController extends Controller
{
    /**
     * Display the specified resource.
     */
public function index()
{
    try {
        // Fetch the cat fact
        $response = Http::timeout(5)->get('https://catfact.ninja/fact');
        $catFact = $response->successful() ? $response->json()['fact'] : 'Could not fetch a cat fact.';
    } catch (\Exception $e) {
        
        $catFact = 'Could not fetch a cat fact.';
    }

    
    return response()->json([
        'status' => 'success',
        'user' => [
            'name' => env('MY_NAME', 'Asogwa Uchechukwu Divine'),
            'email' => env('MY_EMAIL', 'uchedivine65@gmail.com'),
            'stack' => env('MY_STACK', 'PHP/Laravel')
        ],
        'timestamp' => now()->toIso8601String(), 
        'fact' => $catFact
    ], 200); 
}

}
