<?php

require_once "vendor/autoload.php";

$app = new \Slim\Slim();

$app->get('/project/:projectid', function ($id) {
    echo "asking for a particulary projectty, $id";
    $project=new FakeSingleProject();
});





/*$app->get('/', function () {
    echo "please specify a resourse url";
});*/

$app->run();