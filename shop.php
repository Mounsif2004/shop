<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
   
</head>
<style>
h1{
    font-family: "Public Sans", sans-serif;
    font-weight: bold;
}
.card{
    float: right;
     margin-top: 20px;
     margin-left: 10px;
     margin-right: 10px;
}
.card img{
    width: 100%;
    height: 200px;
}
main{
    width: 65%;
}
a{
  padding: 10px;
  font-weight: bold;
  font-size: 15px;
  margin-bottom: 15px;
}
.navbar-brand{
    margin-left: 70px;
    text-decoration: none;
}
</style>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="cart.php"> My cart</a>
    </nav>
  <center>
    <h1>ALL PRODUCTS AVAILABLE</h1>
   </center>
  <?php
include('config.php');
$result=mysqli_query($con,"SELECT * FROM prod");
while($row=mysqli_fetch_array($result)){
    echo"
    <center>
    <main>  <div class='card' style='width: 18rem;'>
    <img src='$row[image]' class='card-img-top' >
    <div class='card-body'>
      <h5 class='card-title'>$row[name]</h5>
      <p class='card-text'>$row[price]</p>
      <a href='val.php? id=$row[id] 'class='btn btn-success'>ADD PRODUCT TO THE CART</a>
    </div>
    </div>
     </main>
    <center>
    ";
}
  ?>

</body>
</html>