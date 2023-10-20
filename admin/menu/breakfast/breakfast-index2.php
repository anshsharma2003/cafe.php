<?php 

require_once("../../connection.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $file_name = $_FILES["photo"]["name"];

    $temp_name = $_FILES["photo"]["tmp_name"];

    $folder = "images/".$file_name;

    move_uploaded_file($temp_name,$folder);

    $names = mysqli_real_escape_string($conn,trim($_POST["names"]));

    $title = mysqli_real_escape_string($conn,trim($_POST["title"]));

    $rate = mysqli_real_escape_string($conn,trim($_POST["rate"]));

    $insert = "INSERT INTO breakfast2(images,names,title,rate)
                    VALUES ('$folder','$names','$title','$rate')";

        $query = mysqli_query($conn,$insert);

        if($query){
            echo  "form submitted";
        }

}

?>
