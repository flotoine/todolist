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
            <form>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title">
                <label for="content">Content:</label>
                <textarea id="content" name="content" rows="5" cols="33">
                It was a dark and stormy night...
                </textarea>
                <input type="submit" value="Submit" onclick="alert('click')">
            </form>
            <?php
                require 'Task.php'
            ?>
            <p>Your data could be lost if you remain logged off</p>
        </section>
    </main>
    <footer>
        <p>All rights reserved - Florian Antoine</p>
    </footer>
</body>
</html>


