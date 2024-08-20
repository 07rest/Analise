<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHAPES</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #1e1e1e;
            color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #000000;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            color: #f5f5f5;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        .product-card {
            background-color: #292929;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.2s;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-image {
            width: 100%;
            height: 200px;
            background-size: cover;
            background-position: center;
        }

        .product-info {
            padding: 15px;
        }

        .product-title {
            font-size: 18px;
            margin: 0 0 10px;
        }

        .product-price {
            font-size: 16px;
            color: #a71313;
            margin: 0 0 10px;
        }

        .add-to-cart {
            display: block;
            text-align: center;
            padding: 10px;
            background-color: #a71313;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .add-to-cart:hover {
            background-color: #a71313;
        }
    </style>
</head>
<body>

<header>
    RESTSTORE - SHAPES
</header>

<div class="container">
    <div class="product-card">
        <div class="product-image" style="background-image: url('shapes1.jpg');"></div>
        <div class="product-info">
            <h3 class="product-title">Shape Crew MF</h3>
            <p class="product-price">R$ 200,00</p>
            <a href="login.php" class="add-to-cart">Adicionar ao Carrinho</a>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image" style="background-image: url('shapes2.jpg');"></div>
        <div class="product-info">
            <h3 class="product-title">Shape Devoys MF</h3>
            <p class="product-price">R$ 250,00</p>
            <a href="login.php" class="add-to-cart">Adicionar ao Carrinho</a>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image" style="background-image: url('shapes3.webp');"></div>
        <div class="product-info">
            <h3 class="product-title">Shape 3S MF</h3>
            <p class="product-price">R$ 300,00</p>
            <a href="login.php" class="add-to-cart">Adicionar ao Carrinho</a>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image" style="background-image: url('shapes4.webp');"></div>
        <div class="product-info">
            <h3 class="product-title">Shape Simetria MF</h3>
            <p class="product-price">R$320,00</p>
            <a href="login.php" class="add-to-cart">Adicionar ao Carrinho</a>
        </div>
    </div>


    <!-- Adicione mais produtos conforme necessário -->
</div>

</body>
</html>