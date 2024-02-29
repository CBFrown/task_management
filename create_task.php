<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="post">
        <input type="hidden" name="id">
        <label for="title">Title</label>
        <input type="text" name="title">
        <label for="desc">Description</label>
        <input type="text" name="desc">
        <label for="priority">Priority</label>
        <input type="text" name="priority">
        <label for="due">Due Date</label>
        <input type="date" name="due">
        <button name="create">Create</button>

    </form>
</body>
</html>