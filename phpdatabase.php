<?php
    echo "welcome<br>";
    //MySQLi

    //connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";

    //create a connection
    $conn = mysqli_connect($servername, $username, $password);
    //die if connection was not successful
    if(!$conn){
        die("Sorry we failed toconnect: ". mysqli_connect_error());
    }
    echo "Connection was successful<br>";

?>