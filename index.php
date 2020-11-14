<?php include("lib/php/db.php");?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="lib/css/style.css">
        <title>Minichan</title>

    </head>

    <body>

        <center>
        
            <h1 id="title">Minichan</h1>

            <div class="topic">
                <div class="topic-name">Boards</div>
                <?php

                    $sql = mysqli_query($connection,"SELECT * FROM boards");
                    
                    while($board = mysqli_fetch_array($sql)){

                        echo "
                        
                            <a href='b/".$board['letter']."' class='board'>/".$board['letter']."/ - ".$board['name']."&nbsp;&nbsp;</a>

                        ";

                    }

                ?>
            </div>
        
        </center>
        
    </body>

</html>