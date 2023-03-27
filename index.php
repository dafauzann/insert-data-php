<?php 
    include ('conn.php');

    $customer = query("SELECT*FROM customers");
    $product = query("SELECT*FROM products");
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Database</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Customers Table</h1>
    <a href="InsertCustomer.php">Insert Customers Baru</a>
    <table border="1px", cellspacing="0">
        <tr>
            <th>Customer Number</th>
            <th>Customer Name</th>
            <th>Contact Name</th>
            <th>Phone</th>
            <th>Address Line 1</th>
            <th>Address Line 2</th>
            <th>City</th>
            <th>State</th>
            <th>Postal Code</th>
            <th>Country</th>
            <th>Sales Employee Number</th>
            <th>Credit Limit</th>
        </tr>
        <?php foreach($customer as $customerRow) : ?>
        <tr>
            <td><?= $customerRow["customerNumber"]?></td>
            <td><?= $customerRow["customerName"]?></td>
            <td><?= $customerRow["contactFirstName"]," ", $customerRow["contactLastName"]?></td>
            <td><?= $customerRow["phone"]?></td>
            <td><?= $customerRow["addressLine1"]?></td>
            <td><?= $customerRow["addressLine2"]?></td>
            <td><?= $customerRow["city"]?></td>
            <td><?= $customerRow["state"]?></td>
            <td><?= $customerRow["postalCode"]?></td>
            <td><?= $customerRow["country"]?></td>
            <td><?= $customerRow["salesRepEmployeeNumber"]?></td>
            <td><?= $customerRow["creditLimit"]?></td>
        </tr>
        <?php endforeach; ?>
        </table>

        
        <h1>Product Table</h1>
        <a href="InsertProduk.php"> Insert Produk baru</a>
        <table border="1px",>
        <tr>
        <th>Product Code</th>
            <th>Product Name</th>
            <th>Product Line</th>
            <th>Product Scale</th>
            <th>Product Vendor</th>
            <th>Product Description</th>
            <th>Quantity In Stock</th>
            <th>Buy Price</th>
            <th>MSRP</th>
        </tr>
        <?php foreach($product as $productRow) : ?>
            <tr>
            <td><?= $productRow["productCode"]?></td>
            <td><?= $productRow["productName"]?></td>
            <td><?= $productRow["productLine"]?></td>
            <td><?= $productRow["productScale"]?></td>
            <td><?= $productRow["productVendor"]?></td>
            <td><?= $productRow["productDescription"]?></td>
            <td><?= $productRow["quantityInStock"]?></td>
            <td><?= $productRow["buyPrice"]?></td>
            <td><?= $productRow["MSRP"]?></td>
            </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>