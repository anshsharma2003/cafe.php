<?php 

require_once("../connection.php");

$id = $_GET["id"];

$select = "SELECT * FROM breakfast2

           WHERE id = '$id'";

$query1 = mysqli_query($conn,$select);

$fetch = mysqli_fetch_assoc($query1);

unlink($fetch["images"]);

$delete = "DELETE FROM breakfast2

            WHERE id = '$id'";

$query = mysqli_query($conn,$delete);

if($query){

    header("location:fetch2.php");
}



?>