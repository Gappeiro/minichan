<?php 
    
    include("../lib/php/db.php");

    if(empty(@$_GET['b'])){
        header("Location: ../index.php");
    }else{

        $b = addslashes($_GET['b']);

        $sql = mysqli_query($connection,"SELECT * FROM boards WHERE letter LIKE '$b'");
        $rows = mysqli_num_rows($sql);

        if($rows > 0){

            while($board = mysqli_fetch_array($sql)){

                $board_values['name'] = $board['name'];

            }

        } else {

            header("Location: ../index.php");

        }

    }

?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../lib/css/style.css">
        <title>/<?php echo $b?>/</title>

    </head>

    <body>

        <center>

            <h1 style="color: red;">/<?php echo $b?>/ - <?php echo $board_values['name']?></h1>

        </center>

        <hr>
        
    </body>

</html>