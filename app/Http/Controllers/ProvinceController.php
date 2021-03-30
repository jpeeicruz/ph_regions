<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Region;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function show(Region $region)
    {
        /*
         * show list of province related to the region
         * */
        $regions = $region->provinces;
        return response($regions, 200);

    }
//    public function showCities(Province $province)
//    {
//        /*
//         * Get cities within the province selected
//         * */
//        $cities = $province->cities;
//        return response($cities, 200);
//    }
}
