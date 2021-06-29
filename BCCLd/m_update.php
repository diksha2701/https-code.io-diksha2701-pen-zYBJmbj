<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="m_update.C.php" method="post">
     	<h2>material update</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>item_code</label>
          <?php if (isset($_GET['item_code'])) { ?>
               <input type="text" name="item_code" placeholder="item code" 
                      value="<?php echo $_GET['item_code']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="item_code" 
                      placeholder="item code"><br>
          <?php }?>

          <label>item_desc</label>
          <?php if (isset($_GET['item_desc'])) { ?>
               <input type="text" 
                      name="item_desc" 
                      placeholder="item description"
                      value="<?php echo $_GET['item_desc']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="item_desc" 
                      placeholder="item description"><br>
          <?php }?>


     	<label>balanceQTY</label>
     	<input type="text" 
                 name="bal_qty" 
                 placeholder="quantity"><br>

          <label>UOM</label>
          <input type="text" 
                 name="UOM" 
                 placeholder="unit of mass"><br>

          <button type="submit">ADD</button><br><br><br>
       
     </form>
    </body>
   </html>


