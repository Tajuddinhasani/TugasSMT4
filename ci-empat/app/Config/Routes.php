<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/home', 'Pages::home');
// $routes->get('/about', 'Pages::about');
// $routes->get('/kontak', 'Pages::kontak');
$routes->setAutoRoute(true);

$routes->get('/', 'Pages::index');
$routes->get('/books/create', 'Books::create');
$routes->get('/books/edit/(:segment)', 'Books::edit/$1');
$routes->delete('/books/(:num)', 'Books::delete/$1');
$routes->get('/books/(:any)', 'Books::detail/$1');

// by Muzaqi