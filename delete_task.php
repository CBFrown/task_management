<?php

session_start();    
include("config.php");

if(isset($_POST["deletion"])){

    $id = $_POST['id'];

    $insert_query = "DELETE FROM `task` WHERE `id`='$id'";
    $insert_result = mysqli_query($con, $insert_query);

    if($insert_result){
        $_SESSION['status'] = "Delete Sucess!";
        $_SESSION['status_code'] = "success";
        header("Location: index.php");
        exit();
    }

    
}

?>