<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function show(Province  $province)
    {
        $cities = $province->cities;
        return response($cities, 200);
    }
}
