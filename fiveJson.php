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

        $json = '{"years":[1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010]}';

        print_r(json_decode($json));

    ?>
</body>
</html>