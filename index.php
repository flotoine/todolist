<?php
$tasks = file('tasks.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <title>To-Do List</title>
</head>
<body class="dark">
    <header>
        <nav>
            <h2>You are not signed in</h2>
        </nav>
    </header>
    <main>
        <section class="card">
            <h1>Welcome on your To-Do list</h1>
            <h2>Add a new task</h2>
            <form action="add.php" method="POST">
                <input type="text" name="task" required>
                <button type="submit">Add</button>
            </form>

            <h2>Tasks</h2>
                <ul>
                    <?php foreach ($tasks as $index => $task) : ?>
                        <li>
                            <?php echo htmlspecialchars($task); ?>
                            <a href="delete.php?index=<?php echo $index; ?>">Delete</a>
                        </li>
                    <?php endforeach; ?>
                </ul>

            <p>Your data could be lost if you remain logged off</p>
        </section>
    </main>
    <footer>
        <p>All rights reserved - Florian Antoine</p>
    </footer>
</body>
</html>


