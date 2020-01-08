<?php

namespace App\Http\Controllers;

use App\Binusian;

class BinusianController extends Controller
{
    public function getBinusian(){
        $binusian = Binusian::all();
        return response()->json($binusian);
    }
}
