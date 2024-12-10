<?php
session_start();
include 'db.php'; // Подключение к базе данных

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Проверяем пользователя в базе данных
    $query = $db->prepare("SELECT * FROM users WHERE email = :email");
    $query->execute(['email' => $email]);
    $user = $query->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: profile.php');
        exit;
    } else {
        echo "<script>alert('Неверный логин или пароль'); window.location.href = '../login.php';</script>";
    }
}
?>
