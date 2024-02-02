<?php
session_start();
require_once 'config/db.php';

if (!isset($_SESSION["userName"])) {
    header("Location: index.php");
    exit();
}

// Fetch products from the database
$sql = "SELECT * FROM product";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style1.css">
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

        nav {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }

        .nav-link {
            text-decoration: none;
            color: #ff7200;
            margin: 0 15px;
            font-weight: bold;
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

        /* Make images responsive within product frames */
        .product img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
<header>
        <nav>
            <a class="nav-link" href="lazhopee.php">Home</a>
            <a class="nav-link" href="item.php">CRUD</a>
            <a class="nav-link" href="about.php">About</a>
            <a class="nav-link" href="config/logout.php">Logout</a>
        </nav>
        <h1>LAZHOPEE</h1>
    </header>

    <section>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="product">';
                echo '<img src="photos/' . $row["productImage"] . '" alt="' . $row["productName"] . '">';
                echo '<h2>' . $row["productName"] . '</h2>';
                echo '<p>₱ ' . number_format($row["price"], 2) . '</p>';
                echo '<button>Add to Cart</button>';
                echo '</div>';
            }
        } else {
            echo '<p>No products available.</p>';
        }

        // Close the database connection
        $conn->close();
        ?>
    </section>
</body>

</html>
