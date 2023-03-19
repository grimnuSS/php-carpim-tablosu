<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarpımTablosu</title>
</head>
<body>
    <?php 
        for($sayi=1; $sayi <= 10; $sayi++){
            for($sayi2=0; $sayi2 <= 10; $sayi2++){
                echo "$sayi x $sayi2 = ".$sayi * $sayi2."<br>";
            }
            echo "<br>";
        }
    ?>
</body>
</html>