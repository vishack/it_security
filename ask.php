<?php
session_start();
if(isset($_SESSION['username'])){
   // echo 'how are you ' .$_SESSION['username'];
    
?>
<!doctype html>
<html>


<style>
	<?php require_once("sub_file/style.php"); ?>
    
    
    body, html {
  height: 100%;
}

body {
  /* The image used */
  background-image: linear-gradient(rgba(255,255,255,0.3), rgba(255,255,255,0.3)), url("bac.jpg");
  opacity: 1;

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


</style>
<body>

<link rel="stylesheet" href="custom.css">


<nav id="nav-menu-container">
				      
<ul class="nav-menu">
	
<li class="menu-active">
<a href="index.php">Home</a></li>
	
<li><a href="about_us1.php">About Us</a></li>

<li><a href="services1.php">Service</a></li>
	

				          
</li>			          
				        
</ul>
				      
</nav>




	<?php require_once("sub_file/new-message.php");?>
	<div id="container">
		<div id="menu">
	<?php 
	     echo $_SESSION['username'] ;     
	     echo '<a style="float:right;color:white;" href="logout.php">Log out </a>';
	 ?>    
	</div>

	<div id="left-col">
		<?php require_once("sub_file/left-col.php");?>
    </div>
     
    <div id="right-col">
     <?php require_once("sub_file/right-col.php"); ?>
    </div>

    </div>    

  

	</body>
</html>

<?php

}else{
	header("location:login.php");
}
?>
