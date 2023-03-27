<html>
<?php include ('header.php')?>
<div class="container">
    <a class = "btn btn-primary"href="http://localhost/intern-activity/person/add.php">Add Person</a>
    
    <?php
    $query = $conn->query("SELECT * FROM persons");
?>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Birthday</th>
      <th scope="col">Birth Place</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
     while ($person = $query->fetch_assoc()) {
        $id= $person['id'];
        echo "<tr>
             <td>" . $person['id'] ."</td>
             <td>" . $person['name'] ."</td>
             <td>" . $person['gender'] ."</td>
             <td>" . $person['birthday'] ."</td>
             <td>" . $person['place_of_birth'] ."</td>
             <td><a href='person/update.php?id=$id' class='btn btn-primary'>Update</a>&nbsp;<a href='person/delete.php?id=$id' class='btn btn-danger' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a></td>
             <td></td>
        </tr>";
     }
     $conn->close();
    ?>
</table>
</div>
<?php include ('footer.php')?>
</html>