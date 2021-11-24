<?php
include_once("dbconnect.php");
$prid = $_GET['prid'];
$prname = $_GET['prname'];
$prtype = $_GET['prtype'];
$price = $_GET['price'];
$prqty = $_GET['prqty'];


    $sql = "INSERT INTO tbl_products(prid, prname, prtype, prprice, prqty) VALUES ('$prid', '$prname', '$prprice', '$prqty')";
    try{

    $conn->exec($sql);
    echo "<script>alert('New Product Created')</script>";
    echo"<script>window.location.replace('mainpage.php')</script>;";

  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    echo "<script>alert('Error')</script>";
    echo "<script> window.location.replace('index.php')</script>;";
  }

  $conn = null;

?>