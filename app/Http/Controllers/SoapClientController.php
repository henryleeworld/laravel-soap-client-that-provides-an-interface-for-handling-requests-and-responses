<?php

namespace App\Http\Controllers;

use RicorocksDigitalAgency\Soap\Facades\Soap;

class SoapClientController extends Controller
{
    public function add() 
    {
        $endpoint = 'http://www.dneonline.com/calculator.asmx?WSDL';
        $inputA = rand(0,100000);
        $inputB = rand(0,100000);
        $result = Soap::to($endpoint)->call('Add', ['intA' => $inputA, 'intB' => $inputB]);
        echo $inputA . ' + ' . $inputB . ' ' . __('adds up to: ') . $result->AddResult . PHP_EOL;
    }
}
