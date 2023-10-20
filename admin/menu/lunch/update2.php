<?php 

require_once("../../connection.php");

$updatid = $_POST["id"];

$images = $_POST["images"];

$update = "UPDATE lunch2tb SET images ='$images'
WHERE id = '$updateid'";

$query = mysqli_query($conn,$update);

if($query){

    header("location:fetch.php");
}

?>


