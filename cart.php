<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My cart</title>
    <style>
h1{
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
}
main{
    width: 40%;
    margin-top: 20px;
}
table{
    box-shadow: 1px 1px 10px silver;
}
thead{
  text-align: center;
}
tbody{
    text-align: center;
}
    </style>
<body>
   <center> <h1>Your reserved products</h1></center>

<?php 
 include('config.php'); 
$result= mysqli_query($con,"SELECT * FROM addcart");
while($row=mysqli_fetch_array($result)){
    echo
    "<center>
    <main>
        <table class='table'>
            <thead>
             <tr>
                <th scope='col'>product name</th>
                <th scope='col'>product price</th>
                <th scope='col'> Delete product</th>
             </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$row[name]</td>
                    <td>$row[price]</td>
                    <td><a href='del_cart.php? id=$row[id]' class='btn btn-danger'> Delete</a></td>
                </tr>
            </tbody>
        </table>
    </main>
</center> ";
}
?>  
<center>
<a href="shop.php">Roturn to products page </a>
</center>
</body>
</html>