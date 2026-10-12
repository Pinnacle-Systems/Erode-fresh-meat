<?php

// BASIC CONFIGURATIONS
$host = "localhost";
$data_base = "salemt_db1";
$uname = "salemt_1";
$pass = "bP37NkJDVUerFwXq";



$website_name = "Salem Fresh Meat";

// TABLES
function getAdminTableName() {return "admin_master";}
function getAdminTokenTable(){return "admin_token";}
function getCategoryTableName(){return "category_master";}
function getProductTableName(){return "product_master";}
function getOrderTableName(){return "order_master";}
function getOrderedTableName(){return "ordered_products";}

?>