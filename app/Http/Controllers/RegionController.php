<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index ()
    {
        /*
         * Show all regions.
         * */
        $regions = Region::all();
        return response($regions, 200);
    }


//    public function showProvince(Region $region)
//    {
//        /*
//         * show list of province related to the region
//         * */
//        $regions = $region->provinces;
//        return response($regions, 200);
//    }
}
