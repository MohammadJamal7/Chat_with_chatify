<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    function displaySomeinfo()
    {
        return response()->json('testing some routes about your project');
    }

    function makeCar(){
        return response()->json('testing some routes about your project');
    }
}
