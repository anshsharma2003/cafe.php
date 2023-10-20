<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border:2px solid black;
            margin:auto;
            margin-top:100px;
            padding:10px;
        }
    </style>
</head>
<body>
<table>
        <thead>
            <tr>
            <th>Id</th>
            <th>images</th>
            <th>facebook </th>
            <th>whatsapp</th>
            <th>insta</th>
            <th>title</th>
            <th>description</th>
            <th>delete</th>
            <th>update</th>
            
            </tr>
        </thead>
        <?php

require_once("../connection.php");

$select = "SELECT * FROM cheftd";

$query = mysqli_query($conn,$select);

while($fetch = mysqli_fetch_assoc($query)){



?>
        
        <tbody>
            
            <tr>
                <td><?php echo $fetch["id"]?></td>
               <td> <img src='<?php echo $fetch["images"]?>' alt="" width="200px"></td>
               <td><?php echo $fetch["facebook"]?></td>
               <td><?php echo $fetch["whatsapp"]?></td>
               <td><?php echo $fetch["insta"]?></td>
               <td><?php echo $fetch["title"]?></td>
               <td><?php echo $fetch["description"]?></td>
               <td><a href='delete.php?id=<?php echo $fetch["id"]?>'>Delete</a></td>
                <td> <a href="#">update</a></td>
                
            </tr>
        </tbody>
        <?php } ?>
    </table>  
    
</body>
</html>