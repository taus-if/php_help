<?php
    //MySQLi

    //connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";

    //create a connection
    $conn = mysqli_connect($servername, $username, $password);

    if(!$conn){
        die("Sorry we failed toconnect: ". mysqli_connect_error());
    }
        //create a db
    $sql = "CREATE DATABASE dbtausif";
    $result= mysqli_query($conn, $sql);
    if($result){
        echo "db was created";
    }
    else{
        echo "db was not created because ". mysqli_error($conn);
    }
    

?>