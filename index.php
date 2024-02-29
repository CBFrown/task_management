<?php session_start();
include ("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dis.css">
</head>
<body>

    <div class="boxel">

        <div class="inboxel">

            <a href="create_task.php">ADD</a>

        </div>

    </div>

    <div class="Lbox">
        <div class="Bbox">
            <table class="List">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Priority</th>
                    <th>Due Date</th>
                    <th>Action</th>
                    <th>Button</th>
                    <th>   </th>
                </tr>
                <tr>
                    <?php
                    $query = "SELECT * FROM `task`";
                    $query_run = mysqli_query($con, $query);
                    if(mysqli_num_rows($query_run) > 0){
                        foreach($query_run as $row){
                    ?>
                    <td><?= $row['title']; ?></td>
                    <td><?= $row['description']; ?></td>
                    <td><?= $row['priority']; ?></td>
                    <td><?= $row['due_date']; ?></td>
                    <td>
                        <form action="delete_task.php" method="post">
                            <input type="hidden" name="id" value="<?= $row['id']; ?>">
                            <button type="submit" name="deletion">Delete</button>
                        </form>
                    </td>
                    <td><a type="button" href="edit_task.php?id=<?=$row['id'];?>">Edit</a></td>
                    <td><a type="button" href="view_tasks.php?id=<?=$row['id'];?>">view</a></td>
                </tr>
                <?php
                    }
                }else{
                ?>
                    <tr>
                    <td colspan="6">No Record Found</td>
                    </tr>
                <?php
                }

                ?>
            </table>

            

        </div>

    </div>

</body>
</html>