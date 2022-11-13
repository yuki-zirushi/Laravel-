<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/building', [BuildingController::class, 'building']);

Route::get('/building/{room}', function ($room) {
    return "部屋番号は" . $room . "です";
});