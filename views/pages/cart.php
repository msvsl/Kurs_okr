<h2 align="center">check</h2>

<?
if($_SESSION['cart'])
{s
?>
<form action="index.php?view=update_cart" method="post" id="cart-form">

<table id="mycart" align="center" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		    <th>product</th>
			<th>price</th>
			<th>quantity</th>
			<th>total</th>
	  </tr>

      <? foreach($_SESSION['cart'] as $id => $quantity):
         $product = get_product($id);
      ?>
        
	  <tr>
          <td align="center"><?=$product['title'];?></td>
    	  <td align="center">doll<?=number_format($product['price'],2);?></td>
    	  <td align="center"><input type="text" size="2" name="<?=$id;?>" maxlength="2" value="<?=$quantity;?>" /></td>
    	  <td align="center">doll<?=number_format($product['price'] * $quantity ,2);?></td>
	  </tr>
      
      <?endforeach;?>
      
</table>	
	 <p class="total" align="center">Order price: <span class="product-price"><?=number_format($_SESSION['total_price'],2);?> doll</span></p>
	 <p align="center"><input type="submit" name="update" value="update" /></p>
	
</form>
<p align="center"><a href="index.php?view=order">chekout</a></p>
<?
}
else
{
    echo "<p align='center' style='color:#gg00ff;'>Ваша корзина пуста!</p>";
}
?>	
