<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Jobs\PredictDeliveryTime;

class DeliveryController extends Controller
{
    public function predict(Request $request)
    {
        $data = $request->only('distance_km', 'fuel_used');

        $response = Http::post('http://127.0.0.1:5000/predict', $data);
        return response()->json([
            'predicted_time' => $response->json()['eta_minutes'],
        ]);

        PredictDeliveryTime::dispatch($delivery);

    }
}
