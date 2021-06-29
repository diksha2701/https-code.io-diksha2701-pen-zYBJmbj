<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['item_code']) ){
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$item_code = validate($_POST['item_code']);
	$item_desc = validate($_POST['item_desc']);

	$bal_qty = validate($_POST['bal_qty']);
	$UOM = validate($_POST['UOM']);

	$user_data = 'item_code='. $item_code. '&item_desc='. $item_desc;


	if (empty($item_code)) {
        header("Location: m_update.php?error=item code is required&$user_data");
	    exit();
	}else if(empty($item_desc)){
        header("Location: m_update.php?error=description is required&$user_data");
	    exit();
	}
	else if(empty($bal_qty)){
        header("Location: m_update.php?error=quantity is required&$user_data");
	    exit();
	}
	else if(empty($UOM)){
        header("Location: m_master.php?error=UOM is required&$user_data");
	    exit();
	}
	else{
            
	    $sql = "SELECT * FROM material WHERE material='$code' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: m_master.php?error=The itemcode "
                                . "is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO material(`item_code`, `item_desc`, `bal_qty`, `UOM`)  "
                   . "VALUES('$item_code','$item_desc', '$bal_qty', '$UOM')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: m_master.php?success=Your account "
                         . "has been updated successfully");
	         exit();
           }else {
	     header("Location: m_master.php?error=unknown error occurred &$user_data");
		        exit();
           } } }
	}else{
	header("Location: m_master.php");
	exit();
}


