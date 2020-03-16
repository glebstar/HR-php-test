<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index()
    {
        return view('weather', [
            'temp' => $this->getTemperature(),
        ]);
    }

    public function getTemperature()
    {
        $json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Bryansk&units=metric&appid=' . config('app.owm_api_key'));
        $weather = json_decode($json);
        if (isset($weather->main->temp)) {
            return $weather->main->temp;
        } else {
            return 'error';
        }
    }

    public function weather()
    {
        return response()->json([
            'temp' => $this->getTemperature(),
        ]);
    }
}
