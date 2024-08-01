<?php
include "config.php";
if (isset($_POST['submit'])) {
$first_name = $_POST['firstname'];
 $last_name = $_POST['lastname'];
 $email = $_POST['email'];
 
$sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`)
VALUES ('$first_name','$last_name','$email')";
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
    <style>
        body{
            background-color: #1f242d;
            font: optional;
        }
        fieldset{
            background-color:#E5E808;
            text-align:center;
        }
        </style>
<body >

<h3 class="red-text" style="color: aqua;">Please sign it. Our news and package details will provide you with the necessary information.</h3>
<form action="" method="POST">
 <fieldset>
 <legend class="red-text" style="color: aqua;">Personal information:</legend>
 First name:<br>
 <input type="text" name="firstname">
 <br>
 Last name:<br>
 <input type="text" name="lastname">
 <br>
 Email:<br>
 <input type="email" name="email">
 <br>

 <br><br>
 <input type="submit" name="submit" value="submit">
 </fieldset>
</form>
<img src="blackground.jpg" alt="macro resturnt" width="500" height="400">
</body>
</html>