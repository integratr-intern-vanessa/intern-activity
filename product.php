<html>
<?php include ('header.php')?>
<div class="container">
<a class = "btn btn-primary"href="http://localhost/intern-activity/product/add.php">Add Product</a>

<?php
    $query = $conn->query("SELECT * FROM products");

?>
<table class="table">
<thead>
<tr>
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">Quantity</th>
  <th scope="col">Price</th>
  <th scope="col">Actions</th>

</tr>
</thead>
<?php
while ($product = $query-> fetch_assoc()){
  $id = $product['id'];
    echo "<tr>
    
    <td>" .$product ['id'] . "</td>
    <td>". $product ['name']."</td>
    <td>". $product ['quantity']."</td>
    <td>". $product ['price']."</td>
    <td> <a href = 'product/update.php?id=" .$product ['id']. "'class='btn btn-primary'>Update</a>
        &nbsp;<a href='product/delete.php?id=$id' class = 'btn btn-danger' onclick='return confirm(\"Are you sure you want to delete this record\")'>Delete</a></td>
         </tr>";

         
}
$conn->close();
?>

</table>
</div>
<?php include ('footer.php')?>
</html>