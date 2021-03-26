<?php
// require MySQL connection
require('database/DBController.php');
// require Product Class
require('database/Product.php');

// DB Controller object
$db = new DBController();

// Product object
$product = new Product($db);