<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

$products = ['un', 'dos', 'tres', 'Un pasito pa', 'lante María'];

echo $twig->render('products.html.twig', ['products' => $products]);

?>