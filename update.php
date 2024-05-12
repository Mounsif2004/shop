<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="sty.css">
</head>
<body><?php 
include('config.php');
$ID = $_GET['id'];
$up=mysqli_query($con,"SELECT*FROM prod where id=$ID");
$data=mysqli_fetch_array($up);
?>
    <center>
       <div class="main">
        <form action="up.php"method="post" enctype="multipart/form-data">
         <h2>UPDATE PRODUCTS</h2>
         <img src="6505894.jpg"alt="logo"width="100%"  >
         <br> 
         <input type="text" name="id" value="<?php echo $data['id']?>">
         <br>
         <input type="text" name="name"value="<?php echo $data['name']?>">
         <br>
         <input type="text" name="price"value="<?php echo $data['price']?>">
         <br>
         <input type="file" id="file" name="image" style="display:none;">
         <label for="file">update image</label>
         <button name="update" type="submit">update  </button>
         <br><br>
         <a href="products.php">Products</a>
        </form>
       </div>
       <p></p>
    </center>
</body>
</html>