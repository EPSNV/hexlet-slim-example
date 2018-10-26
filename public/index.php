<?php

require __DIR__ . '/../vendor/autoload.php';

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$app = new \Slim\App($configuration);

$app->get('/', function ($request, $response) {
    $response->write('Welcome to Hexlet!');
   // return $response;
});
$app->run();