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



    $arrayMonth = [
        [
            1 => 'Январь',
            2 => 'Февраль',
            3 => 'Март'
        ],
        [
            1 => 'Апрель',
            2 => 'Май',
            3 => 'Июнь'
        ]
    ];
        foreach($arrayMonth as  $values){
            foreach($values as $kays => $var){
                echo $var."</br>";
            }
        }
    
    ?>
</body>
</html>