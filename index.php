<?php
ini_set('display_errors', 1);

require 'bootstrap.php';
$route = new Route;
require 'web.php';
$uri = trim($_SERVER['REQUEST_URI'],'/');

require $route->direct($uri);

?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <main>
        <h1>A simple todo application using php and mysql</h1>
        <a href="/todo/create"><button class="btn btn-primary elegant-stylish-theme">Create a Todo</button></a>
        <div>
            <button class="btn btn-primary elegant-stylish-theme">Create a Todo</button>
        </div>
        <div>
            <button class="btn btn-secondary elegant-stylish-theme">Show All Todos</button>
        </div>
    </main>
</body>

</html> -->