<!doctype html>
<?php include"header.html";?>
<html>
	<head>
		<title>Exercise 3</title>
	</head>
	<body style="background-color:#5a9b66; text-color:#ff00ff;">
		<?php
        echo "<table>";
        for ($i=0;$i<=12;$i++){
            echo "<tr>";
            for ($j = 0;$j<=12; $j++){
                echo "<td>$i X $j = ". ($i*$j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>"
		?>
        <a href="index.php">Home</a>
	</body>
</html>