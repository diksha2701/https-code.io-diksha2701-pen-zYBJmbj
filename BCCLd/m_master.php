
<!DOCTYPE html>
<html>
<head>
	<title>material master</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="m_master.C.php" method="POST">
     	<h2>material master</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Item code</label>
        <input type="text" name="item_code" placeholder="item code" ><br>


        <button type="submit" name="search"value="search data">search</button><br><br>
          
     </form>
</body>
</html>
