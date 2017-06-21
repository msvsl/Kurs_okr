 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style/css.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Интернет Магазин</title>
</head>

<body>

<table align="center" width="1366" cellpadding="0" cellspacing="0" border="0" id="main-table">
<tr>
    <td>
        <div id="header"></div>
        <div id="menu">
            <div><a href="index.php">Phone</a></div>
		    			<div><a href="admin.html">Admin</a></div>
			<div><a href="order.php">Orders</a></div>
<?php

include('db.php');

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_POST['image'];
$cat = $_POST['cat'];
$update = $_POST['update'];
$insert = $_POST['insert'];
$delete = $_POST['delete'];
if(isset($insert))
{$query = mysql_query("INSERT INTO products(title,description,price,image,cat) VALUES ('$title','$description','$price','$image','$cat')");
}elseif (isset($update)){$query = mysql_query("UPDATE products SET title='$title', description='$description', price='$price', image='$image', cat='$cat' WHERE id='$id'");
}elseif (isset($delete)){$query = mysql_query("DELETE from products WHERE id='$id'");
}

?>
        </div>
         <a href="admin.html">Sucsessfull! come back>></a>
    </td>
</tr>
<tr>
    <td id="main-block" valign="top">
    
    
        
        <div style="clear: both;"></div>
        
        
        
    </td>
</tr>
<tr>
    <td id="footer-td">
        <div align="center">
            <div class="footer">POKS PE-1-14</div>
        </div>
    </td>
</tr>
</table>

</body>
</html>




