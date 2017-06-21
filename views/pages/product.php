<table align="center" cellpadding="10" cellspacing="10" class="product" border="0">
    <tr>
        <td valign="top">
            <div><a href="#"><img src="userfiles/<?=$product['image']?>" alt="" /></a></div>
            <div class="description">
                <div class="product-name"><a href="#"><?=$product['title']?></a></div>
                <div class="product-price">price: <?=$product['price']?> doll</div>
            </div>
        </td>
        <td valign="top" width="1024">
            <div><?=$product['description']?></div>
            <div><a href="index.php?view=add_to_cart&id=<?=$product['id']?>">Add to cart</a></div>
        </td>
    </tr>
</table>