<?php
include('config.php');
if(isset($_POST['upload'])){
$name= $_POST['name'];
$price= $_POST['price'];
$image= $_POST['image'];
$image_location=$_FILES['image']['tmp_name'];
$image_name=$_FILES['image']['name'];
$image_up="images/".$image_name;
$insert="INSERT INTO prod (name,price,image) values ('$name','$price','$image_up')";#
mysqli_query($con,$insert);
if(move_uploaded_file($image_location,'images/'.$image_name)){
    echo"<script> alert('the product has uploaded')</script>";
}else{
    echo"<script> alert('en error occurred')</script>";
}
header('location: index.php');
}
?>