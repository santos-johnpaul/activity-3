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
    <title>LAZHOPEE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #7f7f7f;
        }
        header {
            background-color: #000000;
            color: #ff7200;
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
            width: 25%;
            border: 5px solid #000000;
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
        <h1>LAZHOPEE</h1>
    </header>
    <section>
        <div class="product">
            <img src="photos/h1.png" alt="Product 1">
            <h2>SUPER REDHAWK ALASKAN</h2>
            <p>₱ 127,500.00</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="photos/h2.png" alt="Product 2">
            <h2>S&W M&P15-22 SPORT MOE SL FDE</h2>
            <p>₱ 72,500.00</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="photos/h3.png" alt="Product 3">
            <h2>590 TACTICAL MARINER</h2>
            <p>₱ 83,500.00</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="photos/h4.png" alt="Product 4">
            <h2>PROARMS ARMORY MODEL PAR Mk3</h2>
            <p>₱ 252,500.00</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="photos/h5.png" alt="Product 5">
            <h2>ISSC AUSTRIA MK22</h2>
            <p>₱ 66,500.00</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="photos/h6.png" alt="Product 6">
            <h2>SIG SAUER MCX AIR RIFLE SCOPED - BLACK</h2>
            <p>₱ 32,000.00</p>
            <button>Add to Cart</button>
        </div>
</body>
</html>
