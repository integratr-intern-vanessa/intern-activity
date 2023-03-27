<html>
<?php include('../header.php') ?>
<div class="container">
    <form class="form" method="POST" action="actions.php">

    <div class="mb-3">
            <label for="name" class="form-label">Name</label>

             <input type="text" class="form-control" id="name" name="name">

             </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>

             <input type="text" class="form-control" id="quantity" name="quantity">

             </div>

             <div class="mb-3">
            <label for="price" class="form-label">Price</label>

             <input type="text" class="form-control" id="price" name="price">

             </div>

      
        

         <input type="submit" name="submit_person" value="Store Product" class="btn btn-primary">

         </form>
</div>
<?php include('../footer.php') ?>

</html>
