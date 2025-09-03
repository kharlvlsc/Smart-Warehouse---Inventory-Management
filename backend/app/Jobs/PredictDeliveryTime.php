<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Http;

class PredictDeliveryTime implements ShouldQueue
{
    use Queueable;

    /**
     * The delivery instance.
     *
     * @var mixed
     */
    protected $delivery;

    /**
     * Create a new job instance.
     *
     * @param  mixed  $delivery
     * @return void
     */
    public function __construct($delivery)
    {
        $this->delivery = $delivery;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $data = [
            'distance_km' => $this->delivery->distance_km,
            'fuel_used' => $this->delivery->fuel_used
        ];

        $response = Http::post('http://127.0.0.1:5000/predict', $data);
        $this->delivery->time_minutes = $response['eta_minutes'];
        $this->delivery->save();
    }

}
