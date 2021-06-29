<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['item_code'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$item_code = validate($_POST['item_code']);
}

	if (empty($item_code)) {
		header("Location: m_master.php?error=item code is required");
        exit();}
$sql = "SELECT item_code,item_desc,bal_qty,UOM FROM material WHERE item_code='$item_code' ";
    $result = mysqli_query($conn, $sql);
       if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
                    if ($row['item_code'] === $item_code )
            {
                   echo $row['item_code'];
                   echo $row['item_desc'];
                   echo $row['bal_qty'];
                   echo $row['UOM'];
           }
}
