<?php
require_once 'config/db.php';

$sql = "SELECT id, productName, price, productImage FROM product";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="assets/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/bootstrap-5.3.2-dist/js/bootstrap.bundle.js"></script>
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

        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #f8d7da; /* Red color for the header */
            color: #721c24; /* Text color */
            border-bottom: 2px solid #f5c6cb; /* Border color */
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .action-buttons {
            display: flex;
            gap: 5px;
        }

        /* Customize modal styles as needed */
        .modal-header {
            background-color: #f8d7da; /* Red color for the header */
            color: #721c24; /* Text color */
            border-bottom: 1px solid #f5c6cb; /* Border color */
        }

        .modal-footer {
            background-color: #f8d7da; /* Red color for the footer */
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
<h2>CRUD</h2>

<table>
    <tr>
        <th>ID</th>
        <th>PRODUCT</th>
        <th>PRICE</th>
        <th>IMAGE</th>
        <th>ACTION</th>
    </tr>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["productName"]."</td>";
                echo "<td>".$row["price"]."</td>";
                echo "<td><img src='photos/" . $row["productImage"] . "' alt='Product Image' style='width: 100px; height: 100px;'></td>";
                echo "<td>";
                echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal'.$row["id"].'">EDIT</button>';
                echo '<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal'.$row["id"].'">ADD</button>';
                echo '                <form action="config/delete.php" method="post">';
                echo '                    <input type="hidden" name="id" value="'.$row["id"].'" />';
                echo '                    <button type="submit" class="btn btn-danger" name="delete">DELETE</button>';
                echo '                </form>';
                echo "</td>";
                echo "</tr>";

                // Edit Modal
                echo '<div class="modal fade" id="editModal'.$row["id"].'" tabindex="-1" aria-labelledby="editModalLabel'.$row["id"].'" aria-hidden="true">';
                echo '    <div class="modal-dialog">';
                echo '        <div class="modal-content">';
                echo '            <div class="modal-header">';
                echo '                <h5 class="modal-title" id="editModalLabel'.$row["id"].'">Edit Product</h5>';
                echo '                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                echo '            </div>';
                echo '            <div class="modal-body">';
                echo '                <form action="config/edit.php" method="post">';
                echo '                    <input type="hidden" name="id" value="'.$row["id"].'" />';
                echo '                    <label for="editProductName">Product Name:</label>';
                echo '                    <input type="text" name="editProductName" value="'.$row["productName"].'" ><br>';
                echo '                    <label for="editPrice">Price:</label>';
                echo '                    <input type="number" name="editPrice" value="'.$row["price"].'" ><br>';
                echo '                    <label for="editProductImage">Product Image URL:</label>';
                echo '                    <input type="file" name="editProductImage" value="'.$row["productImage"].'" ><br>';
                echo '                    <button type="submit" class="btn btn-primary" name="edit">Update Product</button>';
                echo '                </form>';
                echo '            </div>';
                echo '        </div>';
                echo '    </div>';
                echo '</div>';

                // Add Modal
                echo '<div class="modal fade" id="addModal'.$row["id"].'" tabindex="-1" aria-labelledby="addModalLabel'.$row["id"].'" aria-hidden="true">';
                echo '    <div class="modal-dialog">';
                echo '        <div class="modal-content">';
                echo '            <div class="modal-header">';
                echo '                <h5 class="modal-title" id="addModalLabel'.$row["id"].'">Add Product</h5>';
                echo '                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                echo '            </div>';
                echo '            <div class="modal-body">';
                echo '                <form action="config/add.php" method="post" enctype="multipart/form-data">';
                echo '                    <input type="hidden" name="id" value="'.$row["id"].'" />';
                echo '                    <label for="addProductName">Product Name:</label>';
                echo '                    <input type="text" name="productName" required><br>';
                echo '                    <label for="addPrice">Price:</label>';
                echo '                    <input type="number" name="price" required><br>';
                echo '                    <label for="addProductImage">Product Image:</label>';
                echo '                    <input type="file" name="productImage" required><br>';
                echo '                    <button type="submit" class="btn btn-success" name="add">Add Product</button>';
                echo '                </form>';
                echo '            </div>';
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
            }
        } else {
            echo "<tr><td colspan='4'>0 results</td></tr>";
        }
        $conn->close();
        ?>
    </tbody>
</table>

</body>
</html>
