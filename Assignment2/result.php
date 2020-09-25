<?php
//Name John Carroll
//07/06/19
// Age Quiz

require('listQuestion.php');
session_start();
$FirstName = $_SESSION["FName"];
$QNumber = $_SESSION["QNumber"];
$ans = $_GET["answer"];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Age Quiz result</title>
        <link rel="stylesheet" href="CSS/<?php print $_SESSION['Theme'] ?>" type="text/css">
        <script src="JS/timer.js">
        
        </script>
        
        
    </head>
    <body>
            
        <div id="Header"></div>
        <div id="Main">
            <div id="Quiz">
                <h1> Hello <?php print $FirstName;?></h1>
                <?php 
                $decade = 0;
                for ($i=0; $i<count($ans);$i++){
                    print "<script>console.log(". $ans[$i].")</script>";
                    $decade = $decade + $ans[$i];
                }
                $decade = ($decade*5)/$QNumber;
                if($decade <="8")
                {echo "<p>From the answers you have given, we think you are born in the 70s.</p>";}
                else if($decade <="12")
                {echo "<p>From the answers you have given, we think you are born in the 80s.</p>";}
                else if($decade <="16")
                {echo "<p>From the answers you have given, we think you are born in the 90s.</p>";}
                else if($decade <="20")
                {echo "<p>From the answers you have given, we thing your are born after 2000.</p>";}
                ?>
                <p> it took you <?php echo $_GET["timer"];?> seconds.</p>
                <button onclick="window.location='AgeQuizSetup.html'">Return to start</button>
            </div>
        </div>
        <div id="footer"></div>
    </body>
</html>