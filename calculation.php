<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>an attempt at PHP</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="flex_container">
        <div class="header">
            <?php include "logo.inc.php"?>
            <?php include "menu.inc.php"?>
        </div>
        <div class="about_me">
            
            <h1> The sequence is: </h1>
            <div class="knowledge">
                <p> 
                    <?php 
                        if (empty($_POST["amount"]))
                            echo "empty. You need to enter in a number first";
                        else  
                            $answer = '0, 1';
                            $a = 0;
                            $b = 1;
                            for ($x=0; $x<=$_POST["amount"]; $x++) {
                                $c = $a+$b;
                                $answer = $answer.', '.$c;
                                $a = $b;
                                $b = $c;
                            } 
                            echo $answer
                    ?>
                </p>
            </div>
        </div>
    </div>

    <!-- here insert big title -->
    <!-- here insert details about self and pic -->
    <!-- sepFile insert fancy nums -->
    <!-- sepFile insert footer -->
    
</body>
</html>