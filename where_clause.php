<?php
    //connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "contacts";

    //create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Sorry we failed toconnect: ". mysqli_connect_error());
    }
    else{
        echo "Connection was created successfully<br>";
    }
    $sql = "UPDATE `contacts` SET `concern` = 'bhat khabo' WHERE `contacts`.`sno` = 18";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "data updated<br>";
    }
    else{
        echo"unable to update data<br>";
    }


?>