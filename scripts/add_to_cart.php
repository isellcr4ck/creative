<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $user_id = $_SESSION['user_id'];

    $query = $db->prepare("INSERT INTO cart (user_id, product_id) VALUES (:user_id, :product_id)");
    $query->execute(['user_id' => $user_id, 'product_id' => $product_id]);

    echo "<script>alert('Товар добавлен в корзину'); window.location.href = '../catalog.php';</script>";
}
?>
