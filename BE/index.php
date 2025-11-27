<?php
//   để điều hướng.
require_once __DIR__ . '/BE/config/database.php';
require_once __DIR__ . '/BE/src/routes/admin.php';


// index.php?route=admin/products
$route = $_GET['route'] ?? 'admin/dashboard';


handle_admin_route($route);


?>