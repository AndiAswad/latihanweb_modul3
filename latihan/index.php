<?php

include "Controller/ProducController.php";

use Controller\ProductController;

// Deklarasikan objek class
$productController = new ProductController;

// Tampilkan hasil kembalian dari method getAllProduct menggunakan echo
echo $productController->getAllProduct();
