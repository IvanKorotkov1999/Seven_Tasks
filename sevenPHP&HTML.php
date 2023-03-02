<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Добавление поля</h3>
    <form action="sevenPHP&HTML.php" method="post">
        <p>Напишите текст:
        <textarea name="text" maxlength="200"></textarea></p>
        <input type="submit" value="Добавить">
    </form>

    <?php
    if (isset($_POST["text"]))
    {
    $inputText = htmlspecialchars($_POST['text']);
    $file = 'text.txt';
    
    file_put_contents($file, $inputText, FILE_APPEND);

    } else{
        echo "Введенные данные некорректны";
    }
    ?>
</body>
</html>