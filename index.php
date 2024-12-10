<?php include 'includes/header.php'; ?>
<main>
    <div class="container">
        <section class="hero">
            <h1>Добро пожаловать в наш магазин!</h1>
            <p>Откройте для себя лучшие товары для творчества.</p>
            <button onclick="window.location.href='pages/catalog.php'">Перейти в каталог</button>
        </section>

        <section class="features">
            <div class="feature">
                <img src="img/feature1.png" alt="Быстрая доставка">
                <h3>Быстрая доставка</h3>
                <p>Получите свои заказы в кратчайшие сроки.</p>
            </div>
            <div class="feature">
                <img src="img/feature2.png" alt="Большой выбор">
                <h3>Большой выбор</h3>
                <p>Широкий ассортимент товаров для творчества.</p>
            </div>
            <div class="feature">
                <img src="img/feature3.png" alt="Лучшие цены">
                <h3>Лучшие цены</h3>
                <p>Доступные цены на все категории товаров.</p>
            </div>
        </section>

        <section class="products">
            <h2>Популярные товары</h2>
            <div class="product-list">
                <div class="card">
                    <img src="img/product1.jpg" alt="Товар 1">
                    <div class="card-body">
                        <h3>Название товара 1</h3>
                        <p>Краткое описание товара.</p>
                        <div class="price">₽500</div>
                        <button>Добавить в корзину</button>
                    </div>
                </div>
                <div class="card">
                    <img src="img/product2.jpg" alt="Товар 2">
                    <div class="card-body">
                        <h3>Название товара 2</h3>
                        <p>Краткое описание товара.</p>
                        <div class="price">₽700</div>
                        <button>Добавить в корзину</button>
                    </div>
                </div>
                <div class="card">
                    <img src="img/product3.jpg" alt="Товар 3">
                    <div class="card-body">
                        <h3>Название товара 3</h3>
                        <p>Краткое описание товара.</p>
                        <div class="price">₽1000</div>
                        <button>Добавить в корзину</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php include 'includes/footer.php'; ?>
