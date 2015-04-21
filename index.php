<?php
/**
 * Exemplo do uso de controller com Slim
 */

require_once 'Library/Slim/Slim.php';
require_once 'Src/Modulos/Hello/HelloController.php';

use \Slim\Slim; 

Slim::registerAutoloader();

$app = new Slim();

$app->get('/sayhello','Modulos\Hello\HelloController:sayHello');

$app->get('/say','Modulos\Hello\HelloController:say');

$app->get('/hello/:value','Modulos\Hello\HelloController:hello');

$app->run();


