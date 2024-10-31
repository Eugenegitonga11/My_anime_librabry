<?php
    $db_host = "localhost"; 
    $db_user = "root";
    $db_password = "";
    $db_name = "anime";

    //In order to hide the fatal error from the end-user for the connection of database we use try function
    try{
        $conn = mysqli_connect($db_host, $db_user, $db_password,$db_name);
    }
    catch(mysqli_sql_exception){
        echo "error in connection";
    }
    if($conn){
        echo "conection success";
    }
?>