<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Task Title is <?= $task['title']; ?></li>
        <li>Task to due is <?= $task['due'];?></li>
        <li> <?= $task['complete'] ? "complete" : "not complete";
        ?></li>        
    </ul>
    <?php if($task['complete']) : ?>
        <h1>complete</h1>
    <?php else :?>
        <h1>not complete</h1>
    <?php endif; ?>
</body>
</html>