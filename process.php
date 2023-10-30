<?php
// Initialize or retrieve tasks from a session array
session_start();
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Add a new task
if (isset($_POST['task']) && !empty($_POST['task'])) {
    $newTask = $_POST['task'];
    array_push($_SESSION['tasks'], $newTask);
}

// Remove a task
if (isset($_GET['remove']) && is_numeric($_GET['remove'])) {
    $removeIndex = $_GET['remove'];
    if (isset($_SESSION['tasks'][$removeIndex])) {
        unset($_SESSION['tasks'][$removeIndex]);
    }
}

// Display tasks
foreach ($_SESSION['tasks'] as $key => $task) {
    echo "<li>$task <a href='process.php?remove=$key'>Remove</a></li>";
}
?>
