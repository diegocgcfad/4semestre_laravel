<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    <style>
        html, body{
            margin: 0;
            padding: 0 5%;
            box-sizing: border-box;
            background-color: #13151d;
        }

        .center{
            place-items: center;
            display: grid;
            height: 100vh;
            font-family: sans-serif;
            font-size: 40px;
            margin: 0;
            padding: 0;
            background-color: #171923;
        }

        a{
            text-decoration: none;
            width: 30vw;
            background-color: #f33a2f;
            padding: 10px 5px;
            border-radius: 5px;
            color: white;
            text-align: center;
        }

        a:hover{
            width: 31vw;
        }
    </style>
</head>
<body>
    <div class="center">
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
    </div>
</body>
</html><?php /**PATH C:\Users\Diego\Desktop\Back-End\Teste PHP\links\resources\views/hyperlinks.blade.php ENDPATH**/ ?>