<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>an attempt at PHP</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <?php include "index.php" ?>
    <div class="flex_container">
        <div class="header">
            <?php include "logo.inc.php"?>
            <?php include "menu.inc.php"?>
        </div>
        <div class="about_me">
            
            <h1> <?php echo $greet ?> </h1>
          
            <div class="data">
                <div class="myImage">
                    <?php echo '<img src="holyMusicStops.jpg" alt="holy music stops">'?>
                </div>
                <div class="myInfo">
                    <p> 
                        My name is <?php echo $name.'<br>'?>
                        I'm from the city of <?php echo $city.'<br>'?>
                        I'm <?php echo $age ?> years old
                    </p>
                    <p>
                        I've learned about variables <br>
                        and some simple operations you can do with them.
                    </p>
                </div>
            </div>
            <div class="knowledge">
                <p>This website can calculate the fibonacci sequence up to <br> a requested amount of numbers.</p>
                <form action="calculation.php" method="POST">
                    <label for="amount">How many numbers do you want to display?</label>
                    <input type="number" id="amount" name="amount">
                    <button type="submit">Submit</button>
                </form>
            </div>
            <div class="article">
                <p>
                    I'm not sure what to write here, to be honest. So have some random trivia: The majority of a hercules' beetle's life is spent as a larvae (up to 2 years), rather than an adult (only around 6 months). || Daggerfall - a video game released in 1996 has one of the largest video game maps ever (161,000 km^2), because almost all of it is procedurally generated.
                </p>
            </div>
        </div>
                <?php include "footer.inc.php"?>
    </div>
</body>
</html>
