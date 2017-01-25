<?php

require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->get(
    '/',
    function () {
        include_once("view/index.php");
    }
);

$app->get(
    '/videos',
    function () {
        include_once("view/videos.php");
    }
);

$app->get(
    '/shop',
    function () {
        include_once("view/shop.php");
    }
);


$app->run();
