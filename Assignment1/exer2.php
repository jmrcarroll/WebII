<!doctype html>
<?php include"header.html";?>
<html>
	<head>
		<title>Exercise 2</title>
	</head>
	<body style="background-color:#5a9b66; text-color:#ff00ff;">
		<?php
        
        for ($i=0;$i<=12;$i++){
            for ($j = 0;$j<=12; $j++){
                echo "$i X $j = ". ($i*$j) . "| ";
            }
            echo "<br />";
        }
		?>
        <a href="index.php">Home</a>
	</body>
</html>