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

    $insert = "INSERT INTO lunch1(images,names,title,rate)
                    VALUES ('$folder','$names','$title','$rate')";

        $query = mysqli_query($conn,$insert);

        if($query){
            echo  "form submitted";
        }

}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Breakfast</title>

    <style>
        body{
            background-color: grey;
        }
        .container{
            display: flex;
        }
        .left-contant{
            margin-left: 300px;
            width: 350px;
        }
        .right-contant{
            margin-left: 50px;
            width: 350px;
        }
        form{
            border: 2px solid white;
            padding: 20px;
        }
        h1{
            color: white;
        }
        
    </style>
  </head>
  <body>
    <div class="heading text-center mt-5">
        <h1>Dinner</h1>
    </div>

    <div class="container mt-5">

        <div class="left-contant">

        <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <input type="file" class="form-control" name="photo" id="floatingInput" placeholder="name@example.com">
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="names" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Name</label>
        </div>
        <div class="form-floating mt-3">
            <input type="text" class="form-control" name="title" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Title</label>
        </div>
        <div class="form-floating mt-3">
            <input type="text" class="form-control" name="rate" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Rate</label>
        </div>
        <div class="submit text-center mt-4">
            <input type="submit" class="btn btn-success">
        </div>
        </form>
        </div>


        <div class="right-contant">
        <form action="lunch2.php" method="POST" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <input type="file" class="form-control" name="photo" id="floatingInput" placeholder="name@example.com">
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="names" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Name</label>
        </div>
        <div class="form-floating mt-3">
            <input type="text" class="form-control" name="title" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Title</label>
        </div>
        <div class="form-floating mt-3">
            <input type="text" class="form-control" name="rate" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Rate</label>
        </div>
        <div class="submit text-center mt-4">
            <input type="submit" class="btn btn-success">
        </div>
        </form>

        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>