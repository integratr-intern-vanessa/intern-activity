<?php 
include('../header.php');

if (isset($_GET['id'])){
    $sql = "DELETE FROM products where id=" .$_GET['id'];

    $query = $conn->query($sql) or die ($conn->error);

    header("Location: ../product.php");
    exit();

}

?>
