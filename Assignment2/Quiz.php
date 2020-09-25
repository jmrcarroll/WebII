<?php
//Name John Carroll
//07/06/19
// Age Quiz

require('listQuestion.php');
session_start();

function Cleanup($string){
    $string = trim($string);
    $string = htmlspecialchars($string);
    $string = stripslashes($string);
    
    
    return $string;
}


//Store first name, NUmber of questions  in the session and locally
$FirstName = Cleanup($_GET["FName"]);
$NumQuestions = $_GET["QNumber"];
$_SESSION["FName"] = $FirstName;
$_SESSION["QNumber"] = $NumQuestions;
$_SESSION["Theme"] = $_GET["Theme"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Age Quiz</title>
        <link rel="stylesheet" href= "CSS/<?php print $_SESSION['Theme'] ?>" type="text/css">
        <script>
            var time = 0;
            function timer(){
            if (time>=0);
                ++time;
                
                document.getElementById('timer').value= time;
                setTimeout(timer, 1000);
                
                if (time == 60){
                    alert("You have taken too long to answer the questions");
                    window.location = 'AgeQuizSetup.html';
                }
            
            }
        </script>
        
        
    </head>
    <body onload="timer();">
            
        <div id="Header"></div>
        <div id="Main">
            <div id="Quiz">
                <h1> Hello <?php print $FirstName;?></h1>
                <form action="result.php" method="get">
                <?php for($i =0; $i<$NumQuestions;$i++){
                        print "<br>" . $Question[$i] . "<br><select name='answer[]'>";
                        for ($j = 0; $j<count($answer[$i]);$j++){
                            print "<option value =". ($j+1) .">". $answer[$i][$j]."</option>";
                        }
                        print "</select>";
                            
                        }?>
                    <input type="hidden" value="0"  name="timer" id="timer">
                    <input type="submit">
                </form>
            </div>
        </div>
        <div id="footer"></div>
    </body>
</html>