<?php 
include_once ("../connect.php");

$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST ['price'];

if (isset($_POST['submit_person'])){
   
    $sql = "INSERT INTO products(name,quantity, price) VALUES
     ( '$name', '$quantity','$price')";

     $query = $conn-> query($sql) or die ($conn->error);

$_SESSION['success'] = "Person successfully added";
header("Location: ../product.php");
}

elseif(isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = "UPDATE products set name = '$name', 
        quantity = '$quantity',
        price = '$price' where id ='$id'";

        $query = $conn->query($sql) or die ($conn->error);
        $_SESSION['success'] = "Person Successfully updated";
        header("Location: ../product.php");
}
