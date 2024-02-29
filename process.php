<?php

session_start();    
include("config.php");

if(isset($_POST["create"])){

    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $priority = $_POST['priority'];
    $due = $_POST['due'];

    $insert_query = "INSERT INTO `task`(`title`, `description`, `priority`, `due_date`) VALUES ('$title','$desc','$priority','$due')";
    $insert_result = mysqli_query($con, $insert_query);

    if($insert_result){
        $_SESSION['status'] = "Registration Sucess!";
        $_SESSION['status_code'] = "success";
        header("Location: index.php");
        exit();
    }

    
}

if(isset($_POST["edit"])){

    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $priority = $_POST['priority'];
    $due = $_POST['due'];
    $id = $_POST['id'];

    $insert_query = "UPDATE `task` SET `title`='$title',`description`='$desc',`priority`='$priority',`due_date`='$due' WHERE `id`='$id'";
    $insert_result = mysqli_query($con, $insert_query);

    if($insert_result){
        $_SESSION['status'] = "Registration Sucess!";
        $_SESSION['status_code'] = "success";
        header("Location: index.php");
        exit();
    }

    
}


?>