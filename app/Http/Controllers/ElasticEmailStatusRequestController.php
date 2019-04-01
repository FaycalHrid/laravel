<?php

namespace App\Http\Controllers;

include '../../Models/ElasticEmailClient/ElasticEmailStatusRequest.php';

use Illuminate\Http\Request;

class ElasticEmailStatusRequestController extends Controller
{
    public static function getFailedCount()
    {
        $request = new \ElasticEmailClient\ElasticEmailStatusRequest('4c0f095c-34df-81eb-a05c-d65540778aa7');
        echo $request->getResponse()->getFailedCount();
    }
}
