<?php
    //MySQLi

    //connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbtausif";

    //create a connection
    $conn = mysqli_connect($servername, $username, $password);

    if(!$conn){
        die("Sorry we failed toconnect: ". mysqli_connect_error());
    }
    //create table
    $sql = "CREATE TABLE `dbtausif`.`phpmytable` (`id` INT(10) NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `age` INT(8) NOT NULL , `city` VARCHAR(20) NULL DEFAULT NULL , PRIMARY KEY (`id`))";

    $result= mysqli_query($conn, $sql);
    if($result){
        echo "table was created";
    }
    else{
        echo "table was not created because ". mysqli_error($conn);
    }


?>