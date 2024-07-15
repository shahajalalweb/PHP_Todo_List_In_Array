<?php 
    $tasks = [];
    if (isset($_POST["submit"])) {
        $task = $_POST["task"];

        $taskss = array_push($tasks, $task);

        print_r($taskss);
    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List UI</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Optional: Custom styles for the Todo List */
        .todo-container {
            max-width: 600px;
            margin: auto;
        }

        .todo-item {
            transition: background-color 0.3s ease;
        }

        .todo-item:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg todo-container">
        <h1 class="text-2xl font-bold mb-4">Todo List</h1>
        <div class="flex mb-4">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
                <input type="text" name="task" placeholder="Add new task..."
                    class="flex-1 appearance-none border rounded py-2 px-3 mr-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <button name="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Add
                </button>
            </form>
        </div>
        <ul>
            <li class="flex items-center justify-between mb-2 border-b-2 border-gray-200 py-2 todo-item">
                <span class="text-lg">Task 1</span>
                <div>
                    <button class="text-sm text-gray-600 hover:text-red-600 focus:outline-none focus:text-red-600">
                        Delete
                    </button>
                </div>
            </li>
        </ul>
    </div>
</body>

</html>