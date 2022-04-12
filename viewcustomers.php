<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
    body{
        background-position: center;
       background-size: cover;
       height: 100vh;
       margin: 0;
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: center;
        background-color: #E0FFFF;
    }

    button{
        transition: 1.5s;
    }
      
    button:hover{
        background-color:#f4c2c2;
        color: white;
    }
    a:-webkit-any-link {
            float: right;
            color: red;
            cursor: pointer;
            text-decoration: none;
        }
    a:hover{
        color: blue; 
        text-decoration: none;
    }
    </style>
</head>

<body>
<?php
    // include 'config.php';
        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $database = "bank-data";

 // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
    }
    $sql = "SELECT * FROM `customers-info`";
    $result = mysqli_query($conn,$sql);
?>

<!-- <?php
  include 'name.php';
?> -->

<a href="index.html">Back to home</a>
<div class="container">
        <h2 class="text-center pt-4">KUDOS TO ALL OUR VALUABLE CUSTOMERS!!!!</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <!-- <th scope="col" class="text-center py-2">E-Mail</th> -->
                            <!-- <th scope="col" class="text-center py-2">Balance</th> -->
                            <!-- <th scope="col" class="text-center py-2">Details</th> -->
                            </tr>
                        </thead>
                    <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <!-- <td class="py-2"><?php echo $rows['email']?></td> -->
                        <!-- <td class="py-2"><?php echo $rows['balance']?></td> -->
                        <!-- <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Show Details</button></a></td>  -->
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>
