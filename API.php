<?php

require_once 'model/autoload.php';
require_once 'vendor/autoload.php';

$app = new \Slim\Slim();
$app->response->headers->set('Content-Type', 'application/json');

$app->get('/project/:projectid', function ($id) {
    $project = new FakeSingleProject();
    echo $project->toJSON();
});

$app->get('/projects', function () {
    $portfolio = new FakePortfolio();
    echo $portfolio->toJSON();
});

$app->get('/', function () {
    echo "Please specify a resource url";
});

$app->response->setStatus(200);
$app->response->finalize();
$app->run();