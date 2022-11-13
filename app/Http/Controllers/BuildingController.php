<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function building()
    {
        return "建物です";
    }

    public function room($number)
    {
        return "部屋番号は" . $number . "です";
    }
}
