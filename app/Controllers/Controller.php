<?php

namespace App\Controllers;

use Slim\Container;

abstract class Controller
{
    /**
     * @var \Slim\Container
     */
    protected $container;

    /**
     * @param \Slim\Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * @param string $property
     */
    public function __get(string $property)
    {
        return $this->container->{$property};
    }
}
