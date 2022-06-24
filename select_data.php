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

    $sql = "SELECT * FROM `contacts`";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    // if($num>0){
    //     $row = mysqli_fetch_assoc($result);
    //     echo var_dump($row);
    //     echo '<br>';

    //     $row = mysqli_fetch_assoc($result);
    //     echo var_dump($row);
    //     echo '<br>';

    // }
    echo $num;
    echo '<br>';
    while($row=mysqli_fetch_assoc($result)){
        //echo var_dump($row);
        echo $row['sno'] ." ". $row['name'] ." ". $row['email'] ." ". $row['concern'] ." ". $row['dt'];
        echo '<br>';
    }

?>