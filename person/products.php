<?php include('header.php') ?>
    <div class="container">
    <a class = "btn btn-primary"href="http://localhost/internal-activity/person/add.php">Add Product</a>
    
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
    </tr>
  </thead>
  <tbody>
    <?php
     while ($person = $query->fetch_assoc()) {
        echo "<tr>
             <td>" . $person['id'] ."</td>
             <td>" . $person['name'] ."</td>
             <td>" . $person['quantity'] ."</td>
             <td>" . $person['price'] ."</td>
             
             <td></td>
        </tr>";
     }
     $conn->close();
    ?>
</table>
</div>
<?php include ('footer.php')?>
</html>
