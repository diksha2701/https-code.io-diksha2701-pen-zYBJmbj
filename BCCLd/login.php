<?php 
session_start(); 
include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['password'])) {
       function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
        $uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
        $pass = md5($pass);
$sql = "SELECT username,password,usercode FROM test_db WHERE username='$uname' AND password='$pass'";
$result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) === 1) {
                    $row = mysqli_fetch_assoc($result);
                    if ($row['username'] === $uname && $row['password'] === $pass) {
                        $alpha=$row['user_name'];
                        $_SESSION['user_name'] = $row['username'];
                        $_SESSION['name'] = $row['username'];
                        $_SESSION['id'] = $row['usercode'];
                        header("Location: index.php?error='$alpha'");
                        header("Location: home.php");
                        exit();
                    }else{
                        header("Location: index.php?error=Incorect User name or password1");
                        exit();
                    }
		}else{
			header("Location: index.php?error=Incorect User name or password2");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}



