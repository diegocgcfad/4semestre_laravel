<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            place-items: center;
            display: grid;
            height: 100vh;
            font-family: sans-serif;
            font-size: 60px;
            margin: 0;
        }

        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php
        $link1 = ["http://www.google.com","Google"];
        $link2 = ["http://www.github.com","Github"];
        $link3 = ["http://www.linkedin.com","Linkedin"];
        $link4 = ["http://www.laravel.com","Laravel"];       
    ?>
    
    <a target="_blank" href="<?= $link1[0] ?>"> <?= $link1[1] ?> </a>
    <a target="_blank" href="<?= $link2[0] ?>"> <?= $link2[1] ?> </a>
    <a target="_blank" href="<?= $link3[0] ?>"> <?= $link3[1] ?> </a>
    <a target="_blank" href="<?= $link4[0] ?>"> <?= $link4[1] ?> </a>


</body>
</html>