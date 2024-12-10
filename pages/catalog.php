<?php include '../includes/header.php'; ?>
<main>
    <div class="container">
        <h1>Каталог товаров</h1>
        <div class="products">
            <?php
            include '../includes/db.php';
            $query = $db->query("SELECT * FROM products");
            while ($product = $query->fetch()) {
                echo "
                <div class='card'>
                    <img src='{$product['image']}' alt='{$product['name']}'>
                    <div class='card-body'>
                        <h3>{$product['name']}</h3>
                        <p>{$product['description']}</p>
                        <div class='price'>₽{$product['price']}</div>
                        <form action='scripts/add_to_cart.php' method='POST'>
                            <input type='hidden' name='product_id' value='{$product['id']}'>
                            <button type='submit'>Добавить в корзину</button>
                        </form>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>
</main>
<?php include '../includes/footer.php'; ?>
