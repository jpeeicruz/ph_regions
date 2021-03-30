<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use App\Models\City;
use Illuminate\Http\Request;

class BarangayController extends Controller
{
    public function show(City $city)
    {
        $barangays = $city->barangays;
        return response($barangays, 200);
    }
}
