<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin::login');

$routes->get('/admin/login-admin', 'Admin::login');
$routes->get('/admin/dashboard-admin', 'Admin::dashboard');
$routes->get('/data-kendaraan', 'Data_kendaraan::kendaraan');
