<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\BarangayController;
use \App\Http\Controllers\CityController;

Route::get('/regions', [RegionController::class, 'index']); // return regions
Route::get('/provinces/{region:regCode}', [ProvinceController::class, 'show']); // return provinces
Route::get('/cities/{province:provCode}', [CityController::class, 'show']); // return cities
Route::get('/barangays/{city:citymunCode}', [BarangayController::class, 'show']); // return barangays
