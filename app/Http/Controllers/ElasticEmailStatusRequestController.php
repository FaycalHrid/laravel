<?php

namespace App\Http\Controllers;

/*include '../../Models/ElasticEmailClient/ElasticEmailStatusRequest.php';
include '../../Models/ElasticEmailApi/AccessToken.php';
include '../../Models/ElasticEmailApi/Account.php';
include '../../Models/ElasticEmailApi/Campaign.php';
include '../../Models/ElasticEmailApi/Channel.php';
include '../../Models/ElasticEmailApi/Contact.php';
include '../../Models/ElasticEmailApi/Domain.php';
include '../../Models/ElasticEmailApi/EEList.php';
include '../../Models/ElasticEmailApi/Email.php';
include '../../Models/ElasticEmailApi/Export.php';
include '../../Models/ElasticEmailApi/File.php';
include '../../Models/ElasticEmailApi/Log.php';
include '../../Models/ElasticEmailApi/Segment.php';
include '../../Models/ElasticEmailApi/SMS.php';
include '../../Models/ElasticEmailApi/Survey.php';
include '../../Models/ElasticEmailApi/Template.php';*/

include '../../Models/ElasticEmailStatusRequest.php';


use Illuminate\Http\Request;

class ElasticEmailStatusRequestController extends Controller
{
    public static function getFailedCount()
    {
        $request = new \ElasticEmailClient\ElasticEmailStatusRequest('4c0f095c-34df-81eb-a05c-d65540778aa7');
        return $request->getResponse()->getFailedCount();
    }
}
