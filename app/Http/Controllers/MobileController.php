<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileController extends PriceApi
{
    var $rate = 10;

    // overided function to send the output to mobile request
    function outputPrice($amount)
    {
        // display the json output on screen
        echo response()->json(compact('amount'));
    }
}
