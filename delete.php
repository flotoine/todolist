<?php
if (isset($_GET['index'])) {
    $index = $_GET['index'];

    // Lecture des tâches depuis le fichier
    $tasks = file('tasks.txt', FILE_IGNORE_NEW_LINES);

    // Supprimer la tâche spécifiée
    if (isset($tasks[$index])) {
        unset($tasks[$index]);

        // Réécriture du fichier sans la tâche supprimée
        file_put_contents('tasks.txt', implode(PHP_EOL, $tasks) . PHP_EOL);
    }
}

// Redirection vers la page principale
header('Location: index.php');
exit();