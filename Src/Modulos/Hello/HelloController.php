<?php
/**
 * Exemplo de controller
 * Com as principais formas de uso.
 */
namespace Modulos\Hello;

use Slim\Slim;

class HelloController 
{
    public function sayHello()
    {
        echo 'Hello';
    }
    
    public function say()
    {
        $app = Slim::getInstance();
        var_dump($app->request->get());
    }
    
    public function hello($value)
    {
        var_dump($value);
    }
}

