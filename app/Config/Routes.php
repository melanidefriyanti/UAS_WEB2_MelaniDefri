<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('images/(:segment)', 'Home::images/$1');
$routes->get('uploads/images/(:segment)', 'Home::images/$1');
   
// Admin

$routes->get('admin/dataproduk', 'AdminController::dataproduk');
$routes->post('admin/dataproduk', 'AdminController::create_produk');
$routes->post('admin/create_produk', 'AdminController::create_produk');
$routes->get('admin/dataproduk/(:segment)/edit', 'AdminController::edit_produk/$1');
$routes->post('admin/dataproduk/(:segment)/update', 'AdminController::update_produk/$1');
$routes->get('admin/dataproduk/(:segment)/delete', 'AdminController::delete_produk/$1');


service('auth')->routes($routes);
