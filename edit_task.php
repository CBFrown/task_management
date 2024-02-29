<?php session_start();
include ("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $users = "SELECT * FROM `task` WHERE `id` = '$id'";
        $users_run = mysqli_query($con, $users);
        if(mysqli_num_rows($users_run) > 0){
            foreach($users_run as $user){
    ?>
    
    <form action="process.php" method="post">
        <input type="hidden" name="id" value="<?=$user['id'];?>">
        <label for="title">Title</label>
        <input type="text" name="title" value="<?=$user['title'];?>">
        <label for="desc">Description</label>
        <input type="text" name="desc" value="<?=$user['description'];?>">
        <label for="priority">Priority</label>
        <input type="text" name="priority" value="<?=$user['priority'];?>">
        <label for="due">Due Date</label>
        <input type="date" name="due" value="<?=$user['due_date'];?>">
        <button name="edit">Edit</button>

    </form>

    <?php
            }
        }
    }else{
    ?>
            <tr>
            <td colspan="6">No Record Found</td>
            </tr>
    <?php
        }

    ?>
</body>
</html>