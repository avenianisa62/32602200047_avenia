<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->get('/profile', 'ProfileController::index');
$routes->get('/form','FormController::input');
$routes->get('/latihanview', 'HelloWorld::halodunia');
$routes->get('/layout', 'LayoutController::index');
$routes->get('/', 'Home::index');
$routes->get('/', 'HomeController::index');
$routes->get('/profile', 'ProfileController::index');
$routes->get('/experience', 'ExperienceController::index');