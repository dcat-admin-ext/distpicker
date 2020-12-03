<?php

use Abovesky\Distpicker\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('distpicker', Controllers\DistpickerController::class.'@index');
