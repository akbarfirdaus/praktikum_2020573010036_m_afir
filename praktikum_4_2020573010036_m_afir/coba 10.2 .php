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
        require("coba 10.php"); //Akan dipanggil 1x saja
        //dalam file php ini
        tulistebal("Ini adalah tulisan tebal");
        echo "<br>";
        echo $a; //Mengambil nilai dari require
    ?>
</body>
</html>