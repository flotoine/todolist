<?php
if (isset($_POST['task']) && !empty($_POST['task'])) {
    // Récupération de la tâche ajoutée
    $task = $_POST['task'];

    // Sauvegarde dans le fichier tasks.txt
    file_put_contents('tasks.txt', $task . PHP_EOL, FILE_APPEND);
}

// Redirection vers la page principale
header('Location: index.php');
exit();