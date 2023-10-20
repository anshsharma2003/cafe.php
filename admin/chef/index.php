<?php 

require_once("../connection.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $file_name = $_FILES["images"]["name"];

    $tmp_name = $_FILES["images"]["tmp_name"];

    $folder = "images/" . $file_name;

    move_uploaded_file($tmp_name,$folder);

    $facebook = mysqli_real_escape_string($conn,trim($_POST["facebook"]));

    $whatsapp = mysqli_real_escape_string($conn,trim($_POST["whatsapp"]));

    $insta = mysqli_real_escape_string($conn,trim($_POST["insta"]));

    $title = mysqli_real_escape_string($conn,trim($_POST["title"]));

    $description = mysqli_real_escape_string($conn,trim($_POST["description"]));

    $insert = "INSERT INTO cheftd(images,facebook,whatsapp,insta,title,description)
    VALUES('$folder','$facebook','$whatsapp','$insta','$title','$description')";

    $query = mysqli_query($conn,$insert);

    if($query){
        echo '<div class="alert alert-success text-center" role="alert">
        <b>Form Submitted !</b>
      </div>';
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

    <title>Hello, world!</title>
  </head>
  <body>
  
  <div class="container-fluid" >
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-floating mb-3">
  <input type="file" class="form-control" name="images" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Insert Image Here</label>
</div>
<div class="form-floating">
  <input type="text" class="form-control" name="facebook" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Facebook Link</label>
</div>
<div class="form-floating">
  <input type="text" class="form-control" name="whatsapp" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Whatsapp Link</label>
</div>
<div class="form-floating">
  <input type="text" class="form-control" name="insta" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Insta Link</label>
</div>
<div class="form-floating">
  <input type="text" class="form-control" name="title" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Name Of The Chef</label>
</div>
<div class="form-floating">
  <input type="text" class="form-control" name="description" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Write Something About Chef</label>
</div>
<div class="text-center mt-3">
    <input type="submit" value="Form Submit Here" class="btn btn-outline-success">
</div>
    </form>
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