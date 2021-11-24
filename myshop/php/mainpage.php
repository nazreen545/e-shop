<?php
session_start();
include_once("dbconnect.php");

    if (isset($_GET['submit'])) {
        $prid = $_POST['prid'];
        $prname = $_POST['prname'];
        $prtype = $_POST['prtype'];
        $price = $_POST['price'];
        $prqty = $_POST['prqty'];
     
        $sqlinsert = "INSERT INTO tbl_products(prid, prname, prtype, prprice, prqty)
            VALUES ('$prid', '$prname', '$prprice', '$prqty')";
        try {
            $conn->exec($sqlinsert);
            echo "<script> alert('Success')</script>";
            echo "<script> window.location.replace('../index.php?yearform=$yearform&subject=$subject&pageno=1&topic=$topic')</script>";
        } catch (PDOException $e) {
            echo "<script> alert('Failed')</script>";
        }
    }

if (isset($_POST['submit'])) {
    if (file_exists($_FILES["fileToUpload"]["tmp_name"]) || is_uploaded_file($_FILES["fileToUpload"]["tmp_name"])) {
        $target_dir = "../images/";
        $target_file = $target_dir . generateRandomString() . ".png";
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        echo "<script>alert('Success')</script>";
    } else {
        echo "<script>alert('No image selected')</script>";
    }
}

function generateRandomString($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>New Product Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">


</head>

<body>
    <div class="header">
    <h1> MyShop Bouquet & Giftbox </h1>
		<p>Myshop 2021.</p>

    </div>
    <div class="topnavbar" id="myTopnav">

        <a href="#">My Profile</a>
        <a href="#">Contact Us</a>
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="main">
        <div class="row-single">

            <center>
            <div class="card-header" type="submit">
                <h1>NEW PRODUCT</h1>
            </div>
            <center>
            </div>
            </div>

            <form name="newPrForm" action="newproduct.php" method="get">
                
                <div class="row">
                    <div class="col-25">
                        <label for="fname"><b>Insert ID Product<b></label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="prid" name="prid" placeholder="Enter your ID product here..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lnamea">Insert Product Name :</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="prname" name="prname" placeholder="Please insert your product Name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="answer">Product Type: </label>
                    </div>
                    <div class="col-75">
                        <select name="prtype" id="prtypes" required>
                            <option value="">Please Select</option>
                            <option value="Gift">Gift</option>
                            <option value="Bouquet">Bouquet</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lnamec">Product Price: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="prprice" name="prprice" placeholder="Please insert product price..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lnamed">Product Quantity: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="prqty" name="prqty" placeholder="Please insert quantity..">
                    </div>
                </div><br>

               
                <div class="row">
                    <div class="col-25">
                        <label for="lnamed">Picture: </label>
                    </div>
                    <div class="col-75">
                    <img class="imgselection" src="../images/profile/profile.png" height="100" width="100"><br>
						<input type="file" onchange="previewFile()" name="fileToUpload" id="fileToUpload"><br>
                    </div>
                </div><br>
                </form>

                <div class="row">
                    <div><input type="submit" name="submit"  value="Submit">
                    </div>
                </div>
            </form>
      

        <div class="bottomnavbar">

            <a href="#contact"></a>
        </div>
</body>

</html>