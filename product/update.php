<html>
<?php 
include('../header.php'); 

$query = $conn->query("SELECT * FROM products where id=" . $_GET['id']) or die($conn->error); 
$result = $query -> fetch_assoc();

?>

<div class="container">
    <form class="form" method="POST" action="actions.php">
        <div class="mb-3">

        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <label for="name" class="form-label">Name</label>

             <input type="text" class="form-control" id="name" name="name"
             value="<?php echo $result ['name']?>">
             

             </div>

         <div class="mb-3">

             <label for="quantity" class="form-label">Quantity</label>

             <input type="text" class="form-control" id="quantity" name="quantity"
             value="<?php echo $result ['quantity']?>">

             </div>

         <div class="mb-3">

             <label for="price" class="form-label">Price</label>

             <input type="text" class="form-control" id="price" name="price"
             value="<?php echo $result ['price']?>">

             </div>
        

         <input type="submit" name="update_product" value="Update Product" class="btn btn-primary">

         </form>
</div>
<?php include('../footer.php') ?>

</html>