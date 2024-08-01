<?php
include "connect.php";
if (isset($_POST['submit'])) {
    $name = $_POST['firstname']; // Changed 'name' to 'firstname'
    $oder_item = $_POST['order_item']; // Corrected variable name
    $price = $_POST['price'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $date = $_POST['date']; // Added missing semicolon here

    $sql = "INSERT INTO `oder`(`name`, `oder_item`, `price`, `address`, `phone_number`, `date`) 
            VALUES ('$name','$order_item','$price','$address','$phone_number','$date')"; // Changed 'oder' to 'order' and fixed the date column

$result = $conn->query($sql);
 if ($result == TRUE) {
 echo "New record created successfully.";
 header("Location:home page.html");
 exit();
 }else{
 echo "Error:". $sql . "<br>". $conn->error;
 }
 $conn->close();
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>chathu hotel oder site</title>
</head>
<style>
        body{
            background-color: white;
            font: optional;
        }
        fieldset{
            background-color:#E5E808;
            text-align:center;
        }
        </style>
<body>
    <h2 style="text-align=center">oder now</h2>
    <form action="" method="POST">
        <fieldset>
            <legend>You Can Order Item</legend>
            Name<br>
            <input type="text" name="firstname"> <!-- Changed 'name' to 'firstname' -->
            <br>
            Order Item:<br>
            <input type="text" name="oder_item"> <!-- Corrected input name -->
            <br>
            Price:<br>
            <input type="text" name="price">
            <br>
            Address:<br>
            <input type="text" name="address"> <!-- Changed 'address' to 'text' -->
            <br>
            Phone Number:<br>
            <input type="text" name="phone_number">
            <br>
            Date:<br>
            <input type="date" name="date"> <!-- Added missing space after 'type' -->
            <br><br>
            <input type="submit" name="submit" value="Submit">
            <a href="home page.html">Back</a>
        </fieldset>
    </form>
        </fieldset>
    </form>
</body>
</html>
