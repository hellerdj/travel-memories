<?php

function getItemCount() {
    if (!isset($_SESSION['cart'])) {
        return 0;
    }

    $numItems = 0;
    foreach ($_SESSION['cart'] as $itemQty) {
        $numItems += $itemQty;
    }
    return $numItems;
}

function addToCart($id) {
    if (!isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] = 0;
    }

    $_SESSION['cart'][$id]++;
}

?>