<?php require 'reso/base.php';
$filter = 'SELECT * FROM products WHERE genre_id=3';
$_SESSION['product_filter']=$filter;
header("Location: shop.php");
?>
