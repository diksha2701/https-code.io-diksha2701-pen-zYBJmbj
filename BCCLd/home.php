
<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="bootstrap/js/bootsprap.min.js" ></script>
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1min.js" ></script>  
</head>
<body>
        <div id="content">
    
            <nav style="background-color: black">
                <a href="index.php">LOGIN</a>
                <a href="signup.php">SIGNUP</a>
                <a href="logout.php">LOGOUT</a>
            </nav>
            
            <h1> MAINMENU</h1>
          <div class="container text-center">
                 <div class="col-sm-3">
                     <div class="thumbnail">
                         <a href="m_master.php">
                          <img src="./img/material.jpeg" alt="material" ></a>
                              <div class="caption">
                                 <h2><a href="m_master.php">Material master</a></h2>
                              </div>
                     </div>
                </div>
               <div class="col-md-4">
                      <div class="thumbnail">
                         <a href="m_update.php">  
                           <img src="./img/update.jpeg" alt="material" ></a>
                             <h2><a href="m_update.php">Material update</a></h2>
                       </div>
                </div>
              <div class="col-md-4">
                   <div class="thumbnail">
                      <img src="./img/logo.jpeg" alt="material" >
                         <h2><a href="#">Material issue</a></h2>
                   </div>
              </div>
                   <div class="col-sm-3">
                      <div class="thumbnail">
                          <img src="./img/scene.jpeg" alt="material" >
                             <h2><a href="#">Material receipt</a></h2>
                      </div>
                   </div> <br><br>
              </div>
            </div>
    <!-- <h1>Hello, <?php echo $_SESSION['name']; ?></h1>-->
    </body>
   </html>
  <?php 
   }else{
     header("Location: index.php");
     exit();
        }
  ?>
