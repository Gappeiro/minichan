<?php 
    
    include("../lib/php/db.php");

    if(empty(@$_GET['b'])){
        header("Location: ../index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../lib/css/style.css">
        <title>/<?php echo $_GET['b']?>/</title>

    </head>

    <body>


        
    </body>

</html>