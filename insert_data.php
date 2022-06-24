<?php
    //MySQLi

    //connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbtausif";

    //create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Sorry we failed toconnect: ". mysqli_connect_error());
    }
    else{
        echo "Connection was created successfully";
    }
    //add data

    $ide=7;
    $namee = "lke";
    $agee = 34;
    $citye = "dhaka";

    $sql = "INSERT INTO `mytable` (`id`, `name`, `age`, `city`) VALUES ('$ide', '$namee', '$agee', '$citye')";
    $result= mysqli_query($conn, $sql);
    //add new data to the data table
    if($result){
        echo "data was created";
    }
    else{
        echo "data was not created because ". mysqli_error($conn);
    }


?>