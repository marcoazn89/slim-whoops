<?php

require '../vendor/autoload.php';

$app = new \Slim\App([
    'debug'         => true,
    'whoops.editor' => 'sublime'
]);

//$app->add(new \SlimBooboo\Middleware());

$app->add(new SlimWhoops\Middleware($app));

$app->get('/exception/', function($req, $res, $arg) {
	throw new Exception("Error Processing Request", 1);
});

$app->get('/error/', function($req, $res, $arg) {
	$a->B();
});

$app->run();