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
        // --- 1. Fetch the Cat Fact ---
        $catFact = 'Could not fetch a cat fact at this time. Please try again later.'; // Default fallback message
        try {
            $response = Http::timeout(5)->get('https://catfact.ninja/fact');

            if ($response->successful()) {
                $catFact = $response->json()['fact'];
            }
        } catch (\Exception $e) {
            // The API call failed (e.g., timeout, network error).
            // The default fallback message will be used.
            // You could also log the error here: Log::error($e->getMessage());
        }

        // --- 2. Prepare the Response Data ---
        $data = [
            'status' => 'success',
            'user' => [
                'email' => env('MY_EMAIL', 'uchedivine65@gmail.com.com'),
                'name' => env('MY_NAME', 'Asogwa Uchechukwu Divine'),
                'stack' => env('MY_STACK', 'PHP/Laravel'),
            ],
            'timestamp' => Carbon::now()->toIso8601String(), // Get current UTC time in ISO 8601
            'fact' => $catFact,
        ];

        // --- 3. Return the JSON Response ---
        return response()->json($data);
    }
}
