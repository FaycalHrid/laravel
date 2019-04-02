<?php
/**
 * Created by PhpStorm.
 * User: Faycal
 * Date: 01/04/2019
 * Time: 12:19
 */


/*include '../App/Models/ElasticEmailClient/ElasticEmailStatusRequest.php';
include '../App/Models/ElasticEmailApi/AccessToken.php';
include '../App/Models/ElasticEmailApi/Account.php';
include '../App/Models/ElasticEmailApi/Campaign.php';
include '../App/Models/ElasticEmailApi/Channel.php';
include '../App/Models/ElasticEmailApi/Contact.php';
include '../App/Models/ElasticEmailApi/Domain.php';
include '../App/Models/ElasticEmailApi/EEList.php';
include '../App/Models/ElasticEmailApi/Email.php';
include '../App/Models/ElasticEmailApi/Export.php';
include '../App/Models/ElasticEmailApi/File.php';
include '../App/Models/ElasticEmailApi/Log.php';
include '../App/Models/ElasticEmailApi/Segment.php';
include '../App/Models/ElasticEmailApi/SMS.php';
include '../App/Models/ElasticEmailApi/Survey.php';
include '../App/Models/ElasticEmailApi/Template.php';*/

use GuzzleHttp\Client;

include '../App/Models/ElasticEmailStatusRequest.php';

$request = new \ElasticEmailClient\ElasticEmailStatusRequest('4c0f095c-34df-81eb-a05c-d65540778aa7');

echo $request->getResponse()->getFailedCount();
