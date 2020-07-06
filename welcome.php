

<!-- This is HTML code of IT security page -->



<?php
session_start();
//include("connection.php");

if(isset($_SESSION['username'])){
	//echo 'how are you ' .$_SESSION['username'];

?>




<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<title>IT SECURITY</title>

<link rel="stylesheet" href="custom1.css">
</head>
<body>


<section class="hero_image">



<nav id="nav-menu-container">
				      
<ul class="nav-menu">
	
<li class="menu-active">
<a href="index.php">Home</a></li>
	
<li><a href="about_us2.php">About Us</a></li>

<li><a href="services2.php">Service</a></li>
	
 <li><a href="logout.php">Logout</a></li>
<!--				          
		
				         
<li><a href="register.php">SignUp</a>
				            
				          
</li>			          
				   -->     
</ul>
				      
</nav>


		
<div class="hero_wrapper">
			
<h1>Get Premium Support</h1>
			
<p><b>Our friendly Support Team is available to help you 24 hours a day, seven days a week. We look forward to hearing from you! Our 24/7 support team is available to assist you with every aspects of Computer help. We know you're busy, so we provide you with a number of options for you to contact us. From phone to chat, our friendly and knowledgeable staff is waiting to hear from you. All contacts will be responded to by the same means they are received.</b><p>

<h2 align=center> Support with payment for any kind of computer help!!</h2>



<!--
 <p align="center"><b><font face = "Comic sans MS" size =" 5">Linux Users - Vishal Kumar</font></b></p>
 <p align="center"><b><font face = "Comic sans MS" size =" 5">Windows Users - Parag Thakur</font></b></p>
 <p align="center"><b><font face = "Comic sans MS" size =" 5">Mac Users - Dipesh Kumar</font></b></p>
 <p align="center"><b><font face = "Comic sans MS" size =" 5">Linux Users - Vishal Kumar</font></b></p>    -->
			
     <!--     <span>post</span>   -->
			
   <!--<form class="form_code" action="http://localhost/it_security/checkout.php">    -->

				
<!--  <input class="post_code" type="text" placeholder="Enter your post code">  -->


				
  <!-- <button type="submit" name="pay">Proceed to Pay</button>  -->
<!--  <div class="button" id="button-7" align="center">
    <div id="dub-arrow" type="submit"><a href="checkout.php"><img src="https://github.com/atloomer/atloomer.github.io/blob/master/img/iconmonstr-arrow-48-240.png?raw=true" alt="" /></a></div>
   
   Pay
</div>
</form>
-->
 <form class="form_code" action="http://localhost/it_security/checkout.php"> 

    	

				
<!--  <input class="post_code" type="text" placeholder="Enter your post code">  -->


				
   <button type="submit">Buy</button>

			
   </form> 
		
</div>
	
</section>

<!--
<section class="pro">
		
<div class="pro_list">
			
<img class="img-responsive" src="pic3.png" alt="">
			
<h2 class="pro_heading">
				
Technical Experience
			
</h2>
			
<p>We are well-versed in a variety of operating systems, networks, and databases. We work with just about any technology that a 
small business would encounter. We use this expertise to help customers with small to mid-sized projects.</p>
		
</div>

		
<div class="pro_list">
			
<img class="img-responsive" src="pic2.png" alt="">
			
<h2 class="pro_heading">
				
High ROI
			
</h2>
			
<p>Do you spend most of your IT budget on maintaining your current system? Many companies find that constant maintenance eats 
into their budget for new technology. By outsourcing your IT management to us, you can focus on what you do best--running your business.</p>
		
</div>
		
<div class="pro_list">
			
<img class="img-responsive" src="pic1.png" alt="">
			
<h2 class="pro_heading">
				
Satisfaction Guaranteed
			
</h2>
			
<p>The world of technology can be fast-paced and scary. That's why our goal is to provide an experience that is tailored to 
your company's needs. No matter the budget, we pride ourselves on providing professional customer service. We guarantee you will be satisfied with our work. </p>
		
</div>

	
</section>
-->
</body>

</html>
<?php
}else
   //echo "f";
header("location:login.php");
?>