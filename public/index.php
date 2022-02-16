<?php

// Подключение автозагрузки через composer
require __DIR__ . '/../vendor/autoload.php';


use Slim\Factory\AppFactory;
echo __DIR__ . '/../vendor/autoload.php';
$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

$app->get('/', function ($request, $response) {
  //  return $response->write('Welcome to Slim!');
    //$response->getBody()->write('Welcome to Slim!');
    //return $response;
    // Благодаря пакету slim/http этот же код можно записать короче
    // return $response->write('Welcome to Slim!');
});
$app->run();