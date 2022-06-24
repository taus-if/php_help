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
    $sql = "DELETE FROM `contacts` WHERE `contacts`.`sno` = 43";
    $result = mysqli_query($conn, $sql);
    $aff = mysqli_affected_rows($conn);
    echo "<br>number of rows deleted: $aff<br>";

    if($result){
        echo "delete successful<br>";
    }
    else{
        $err = mysqli_error();
        echo "delete unsuccessful due to this error --> $err<br>";
    }
?>