<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $hostname = 'localhost';
        $username = 'root';
        $password = '123';
        $database = 'data';

        $conn = mysqli_connect($hostname, $database, $username, $password);

        $sql = "SELECT * FROM users";
        $resultSet = mysqli_query($conn, $sql);

        /* 
        1) Запрос будет выполнен корректно

        2) Запрос выполнит выборку всех данных из таблицы users в баззе данных data


        3) Выполнение ниже 
        */
        $sql = "DELETE FROM users WHERE `id` <= 5";

    ?>
</body>
</html>