<?php
include 'db.php'; // Подключение к базе данных

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Проверяем, есть ли уже такой email
    $query = $db->prepare("SELECT * FROM users WHERE email = :email");
    $query->execute(['email' => $email]);

    if ($query->rowCount() > 0) {
        echo "<script>alert('Этот email уже зарегистрирован'); window.location.href = '../register.php';</script>";
    } else {
        $insert = $db->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
        $insert->execute(['name' => $name, 'email' => $email, 'password' => $password]);
        echo "<script>alert('Регистрация успешна'); window.location.href = '../login.php';</script>";
    }
}
?>
