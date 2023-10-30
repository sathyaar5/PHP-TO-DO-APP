<!DOCTYPE html>
<html>
<head>
    <title>PHP To-Do List</title>
</head>
<body>
    <h1>My To-Do List</h1>
    <form method="post" action="process.php">
        <input type="text" name="task" placeholder="Enter a new task" required>
        <button type="submit">Add Task</button>
    </form>
    <h2>Tasks:</h2>
    <ul>
        <?php
        // Initialize or retrieve tasks from a session array
        session_start();
        if (!isset($_SESSION['tasks'])) {
            $_SESSION['tasks'] = [];
        }

        // Display tasks
        foreach ($_SESSION['tasks'] as $task) {
            echo "<li>$task</li>";
        }
        ?>
    </ul>
</body>
</html>
