<?php

        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $database = "bank-data";

 // Create connection
        $conn = mysqli_connect("localhost:3306", "root", "", "bank-data");

    if(!$conn){
        die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
    }

?>