<?php
include "connect.php";
$sql = "SELECT * FROM oder";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
 <title>View Page</title>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
 <div class="container">
 <h2>users</h2>
<table class="table">
 <thead>
 <tr>
 <th>id</th>
 <th>name</th>
 <th>order_item</th>
 <th>price</th>
 <th>address</th>
 <th>phone_number</th>
 <th>date</th>
 </tr>
 </thead>
 <tbody>
 <?php
 if ($result->num_rows > 0) {
 while ($row = $result->fetch_assoc()) {
 ?>
 <tr>
 <td><?php echo $row['id']; ?></td>
 <td><?php echo $row['name']; ?></td>
 <td><?php echo $row['oder_item']; ?></td>
 <td><?php echo $row['price']; ?></td>
 <td><?php echo $row['address']; ?></td>
 <td><?php echo $row['phone_number']; ?></td>
 <td><?php echo $row['date']; ?></td>
 <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id'];
?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];
?>">Delete</a></td>
 </tr>
 <?php
 }
 }
 ?>
 </tbody>
</table>
</div>
</body>
</html>