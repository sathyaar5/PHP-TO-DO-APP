<!DOCTYPE html>
<html>
<head>
    <title>PHP To-Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        form {
            text-align: center;
            margin: 20px 0;
        }
        input[type="text"] {
            width: 70%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }
        li {
            margin: 10px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
        }
        li a {
            text-decoration: none;
            color: #f00;
            padding: 5px;
            border: 1px solid #f00;
            border-radius: 3px;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: lightblue;
            color: white;
        }
    </style>
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
        foreach ($_SESSION['tasks'] as $key => $task) {
            echo "<li>$task <a href='process.php?remove=$key'>Remove</a></li>";
        }
        ?>
    </ul>
    <div class="footer">Developed by<a href =" mailto:sathyarangappagari5@gmail.com"> Sathya</a></div>
</body>
</html>
