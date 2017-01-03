<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceApi extends Controller
{
    var $rate = 11;

    // Api function to calculate the price
    protected function calculatePrice()
    {
        $amount = 5 * $this->rate;
        $this->outputPrice($amount);
    }

    // common api function to send the output
    function outputPrice($amount)
    {
        $hmtl = '<h1> The Amount for 5 item is = '.$amount.'</h1>';
        echo $hmtl;
    }
}
