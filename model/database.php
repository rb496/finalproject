<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=rb496';
    $username = 'rb496';
    $password = 'gi5POQfH';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>