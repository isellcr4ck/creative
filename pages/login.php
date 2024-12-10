<?php include '../includes/header.php'; ?>
<main>
    <div class="container">
        <section class="login">
            <h1>Вход в аккаунт</h1>
            <form action="../scripts/login.php" method="POST">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Войти</button>
                <p>Нет аккаунта? <a href="register.php">Зарегистрироваться</a></p>
            </form>
        </section>
    </div>
</main>
<?php include '../includes/footer.php'; ?>
