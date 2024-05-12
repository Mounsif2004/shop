<?php
include('config.php');
if(isset($_POST['update'])){
 $ID = $_POST['id'];   
$name= $_POST['name'];
$price= $_POST['price'];
$image= $_POST['image'];
$image_location=$_FILES['image']['tmp_name'];
$image_name=$_FILES['image']['name'];
$image_up="images/".$image_name;
$update="UPDATE prod set name='$name',price='$price',image='$image_up' where id=$ID ";
mysqli_query($con,$update);
if(move_uploaded_file($image_location,'images/'.$image_name)){
    echo"<script> alert('the product has update')</script>";
}else{
    echo"<script> alert('en error occurred')</script>";
}
header('location: index.php');
}
?>