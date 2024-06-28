<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'productosController::index');
$routes->get('/detallesView/(:num)', 'productosController::detalles/$1');

