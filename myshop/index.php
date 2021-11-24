<?php
include_once("php/dbconnect.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>My Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="header">
		<h1> MyShop Bouquet & Giftbox </h1>
		<p>Myshop 2021.</p>
	</div>
	<div class="topnavbar">
        <a href="mainpage.php">News </a>
        <a href="#">About Us</a>
        <a href="html/register.html" class="right">START</a>
    </div>
	<div class="main">
		<center>
			<img src="images/flower1.jpg">
			<img src="images/flower5.jpg">
			<img src="images/flower4.jpg">
			<img src="images/flower3.jpg">
		</center>
    </div>

    <a href="../myshop/php/newproduct.php" class="float">  <!--floating button-->
            <i class="fa fa-plus my-float"></i>
        </a>
		<div class="bottomnavbar">


		<a href="#home"></a>
	
	</div>	

</body>

</html>
