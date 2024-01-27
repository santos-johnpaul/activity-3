<?php
session_start();

if(!isset($_SESSION["userName"])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple eCommerce Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #7f7f7f;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }
        section {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .product {
            width: 30%;
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            text-align: center;
            background-color: #f7f7f7;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header>
    <a class="nav-link" href="config/logout.php">Logout</a>
        <h1>Simple eCommerce</h1>
    </header>
    <section>
        <div class="product">
            <img src="photos/h1.png" alt="Product 1">
            <h2>Product 1</h2>
            <p>Description of Product 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>$19.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="photos/h2.png" alt="Product 2">
            <h2>Product 2</h2>
            <p>Description of Product 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>$29.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="photos/h3.png" alt="Product 3">
            <h2>Product 3</h2>
            <p>Description of Product 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>$39.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="product4.jpg" alt="Product 4">
            <h2>Product 4</h2>
            <p>Description of Product 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>$49.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="product5.jpg" alt="Product 5">
            <h2>Product 5</h2>
            <p>Description of Product 5. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>$59.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="product6.jpg" alt="Product 6">
            <h2>Product 6</h2>
            <p>Description of Product 6. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>$69.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="product7.jpg" alt="Product 7">
            <h2>Product 7</h2>
            <p>Description of Product 7. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>$79.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="product8.jpg" alt="Product 8">
            <h2>Product 8</h2>
            <p>Description of Product 8. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>$89.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="product9.jpg" alt="Product 9">
            <h2>Product 9</h2>
            <p>Description of Product 9. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>$99.99</p>
            <button>Add to Cart</button>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Simple eCommerce</p>
    </footer>
</body>
</html>
