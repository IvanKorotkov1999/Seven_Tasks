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



    $arrayInfo = [
        'name' => 'Ivan',
        'surnume' => 'Ivanov',
        'address' => 'Petrovsk',
        'telephone' => '8 (996) 858 91 09'
    ];
        foreach($arrayInfo as $kays => $values){
                echo $kays." - ".$values."</br>";
        }
    
    ?>
</body>
</html>