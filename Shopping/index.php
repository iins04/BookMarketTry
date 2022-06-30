<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
session_start();
require 'connect.php';
//List product dari database
$sql = 'SELECT * FROM product';
$result = mysqli_query($con, $sql);
 ?>
<h2> Select the items: </h2>
 <table id="t01">
 <tr>
    <th>Id</th>
    <th>judul</th>
    <th>harga</th>
    <th>stock</th>
    <th>Buy</th>
 </tr>
    <?php while($product = mysqli_fetch_object($result)) { ?> 
    <tr>
        <td> <?php echo $product->id; ?> </td>
        <td> <?php echo $product->judul; ?> </td>
        <td> Rp.<?php echo $product->harga; ?> </td>
        <td> <?php echo $product->stock; ?> </td>
        <td> <a href="cart.php?id= <?php echo $product->id; ?> &action=add">Order Now</a> </td>
    </tr>
    <?php } ?>
 </table>
</body>

 </html>