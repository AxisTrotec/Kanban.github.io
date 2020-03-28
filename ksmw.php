<?php
require_once ('init/db-connection.php');
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">

    <title> Arc Kanban </title>
</head>
<body>
    <div class="content">

    <?php include('inc/msg.php') ?>

    <?php include('inc/main-menu.php') ?>
        
    </div>

    <?php require_once('init/db-close-connection.php') ?>

    <footer> Page owned and created by: Arc Enterprise. </footer>
</body>
</html>