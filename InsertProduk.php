<?php
$conn = mysqli_connect("localhost","root","","classicmodels");

if (isset ($_POST["submit"])) {
    $custProduct = $_POST["productCode"];
    $custName = $_POST["productName"];
    $custLine = $_POST["productLine"];
    $custScale = $_POST["productCode"];
    $custVendor = $_POST["productVendor"];
    $custDest = $_POST["productDescription"];
    $custQuantity = $_POST["quantityInStock"];
    $custBuyp = $_POST["buyPrice"];
    $custMsrp = $_POST["MSRP"];

    $query = "INSERT INTO products(productCode, productName, productLine, productScale, productVendor, productDescription, quantityInstock, buyPrice, MSRP)
    VALUES('$custProduct', '$custName', '$custLine', '$custScale', '$custVendor', '$custDest', '$custQuantity', '$custBuyp', '$custMsrp')
    ";

    mysqli_query($conn, $query);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>
<body>
    <h1>Insert data</h1>

    <form action="" method="post">
        <table>

            <tr>
                <td>
                    <label for="productCode">Product Code :</label>
                </td>
                <td>
                    <input type="text" name="productCode" id="productCode">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="productName">Product Name :</label>
                </td>
                <td>
                    <input type="text" name="productName" id="productName">
                </td>
            </tr>

            <tr>
                <td><label for="productLine">Product Line :</label></td>
                <td><select type="text" name="productLine" id="productLine">
                        <option>--Pilih Salah Satu--</option>
                        <?php 
                        $queryProductLine = "SELECT productLine FROM productlines";
                        $result = mysqli_query($conn,$queryProductLine);

                        while($data = mysqli_fetch_array($result)) : ?>
                        <option value="<?= $data["productLine"] ?>"><?= $data["productLine"]  ?></option>
                        <?php endwhile; ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="productScale">Product Scale :</label>
                </td>
                <td>
                    <input type="text" name="productScale" id="productScale">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="productVendor">Product Vendor :</label>
                </td>
                <td>
                    <input type="text" name="productVendor" id="productVendor">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="productDescription">Product Description :</label>
                </td>
                <td>
                    <input type="text" name="productDescription" id="productDescription">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="quantityInStock">Quantity In Stock :</label>
                </td>
                <td>
                    <input type="text" name="quantityInStock" id="quantityInStock">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="buyPrice">Buy Price :</label>
                </td>
                <td>
                    <input type="text" name="buyPrice" id="buyPrice">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="MSRP">MSRP :</label>
                </td>
                <td>
                    <input type="text" name="MSRP" id="MSRP">
                </td>
            </tr>


        </table>
        <br><br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    
</body>
</html>