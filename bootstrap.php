<?php

require  __DIR__ . '/vendor/autoload.php';
$router = require __DIR__ . '/router.php';
$resolver = require __DIR__ . '/resolver.php';

$object = $router->handler();

/*$controller = new $object['class'](new App\Models\User());

$action = $object['action'];

echo $controller->$action();

(new SON\Resolver)->handler($object['class'], $object['action']);*/

$resolver->handler($object['class'], $object['action']);

