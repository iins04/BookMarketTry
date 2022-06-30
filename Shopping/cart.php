$cart = array_values($cart);
    $_SESSION['cart'] = $cart;
}
// Perbarui jumlah dalam keranjang
if(isset($_POST['update'])) {
  $arrQuantity = $_POST['quantity'];
  $cart = unserialize(serialize($_SESSION['cart']));
  for($i=0; $i<count($cart);$i++) {
     $cart[$i]->quantity = $arrQuantity[$i];
  }
  $_SESSION['cart'] = $cart;
}
?>
<h2> Items in your cart: </h2> 
<form method="POST">
<table id="t01">
<tr>
    <th>Option</th>
    <th>Id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>

    <th>Total</th>
</tr>
<?php 
     $cart = unserialize(serialize($_SESSION['cart']));
     $s = 0;
     $index = 0;
    for($i=0; $i<count($cart); $i++){
        $s += $cart[$i]->price * $cart[$i]->quantity;
 ?> 
   <tr>
        <td><a href="cart.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')" >Delete</a> </td>
        <td> <?php echo $cart[$i]->id; ?> </td>
        <td> <?php echo $cart[$i]->name; ?> </td>
        <td>Rp. <?php echo $cart[$i]->price; ?> </td>
        <td> <input type="number" min="1" value="<?php echo $cart[$i]->quantity; ?>" name="quantity[]"> </td>  
        <td> Rp.<?php echo $cart[$i]->price * $cart[$i]->quantity; ?> </td> 
   </tr>
    <?php 
        $index++;
    } ?>
    <tr>
        <td colspan="5" style="text-align:right; font-weight:bold">Sum 
         <input id="saveimg" type="image" src="images/save.png" name="update" alt="Save Button">
         <input type="hidden" name="update">
        </td>
        <td> Rp.<?php echo $s; ?> </td>
    </tr>
</table>
</form>
<br>
<a href="index.php">Continue Shopping</a> | <a href="checkout.php">Checkout</a>
<?php 
if(isset($_GET["id"]) || isset($_GET["index"])){
 header('Location: cart.php');
} 
?>
</body>
 </html>