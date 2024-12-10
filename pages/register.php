<?php include '../includes/header.php'; ?>
<main>
    <div class="container">
        <section class="register">
            <h1>Регистрация</h1>
            <form action="../scripts/register.php" method="POST">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Зарегистрироваться</button>
                <p>Уже есть аккаунт? <a href="login.php">Войти</a></p>
            </form>
        </section>
    </div>
</main>
<?php include '../includes/footer.php'; ?>
