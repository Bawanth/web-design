<?php
include "connect.php";

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $oder_item = $_POST['oder_item'];
    $price = $_POST['price'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $date = $_POST['date'];
    $user_id = $_POST['user_id'];

    // Using prepared statements to prevent SQL injection
    $stmt = $conn->prepare("UPDATE `oder` SET `name`=?, `oder_item`=?, `price`=?, `address`=?, `phone_number`=?, `date`=? WHERE `id`=?");
    $stmt->bind_param("ssisssi", $name, $oder_item, $price, $address, $phone_number, $date, $user_id);
    if ($stmt->execute()) {
        echo "Record updated successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $sql = "SELECT * FROM `oder` WHERE `id`='$user_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $name = $row['name'];
            $oder_item = $row['oder_item'];
            $price = $row['price'];
            $address = $row['address'];
            $phone_number = $row['phone_number'];
            $date = $row['date'];
        }
?>
        <html>
        <body>
            <h2>User Update Form</h2>
            <form action="" method="post">
                <fieldset>
                    <legend>Update Order:</legend>

                    First name:<br>
                    <input type="text" name="name" value="<?php echo $name; ?>"><br>
                    Order item:<br>
                    <input type="text" name="oder_item" value="<?php echo $oder_item; ?>"><br>
                    Price:<br>
                    <input type="text" name="price" value="<?php echo $price; ?>"><br>
                    Address:<br>
                    <input type="text" name="address" value="<?php echo $address; ?>"><br>
                    Phone number:<br>
                    <input type="text" name="phone_number" value="<?php echo $phone_number; ?>"><br>
                    Date:<br>
                    <input type="text" name="date" value="<?php echo $date; ?>"><br>
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                    <br>
                    <input type="submit" value="Update" name="update">
                </fieldset>
            </form>
        </body>
        </html>
<?php
    } else {
        header('Location: view.php');
    }
}
?>
