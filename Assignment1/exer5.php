<!doctype html>
<?php include"header.html";?>
<html>
	<head>
		<title></title>
	</head>
	<body style="background-color:#5a9b66; text-color:#ff00ff;">
		<?php
			function cleanUp($input){
				$input = trim($input); //removes and excess spaces
				echo "<script> console.log(". $input .")</script>";
				$input = stripslashes($input); // removes any forward or backwards slashes
				echo "<script> console.log(". $input .")</script>";
				$input = htmlspecialchars($input); //removes HTML Tags.
				echo "<script> console.log(". $input .")</script>";
				return $input;
			}
			//variables
			$Name = $Age = "";
            if (isset($_POST["submit"])){
                if(empty($_POST["FName"]) or empty($_POST["LName"])){
                    if (empty($_POST["FName"]) ){
                        echo "First name field incomplete<br>";
                    } else{
                        echo "Last Name field incomplete<br>";
                    }
                    ?>
        <table>
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="post">
            <tr><td>Forename: </td> <?php echo '<td><input type="text" name="FName" value="'.$_POST["FName"] . '"></td>';?></tr>
            <tr><td>surname: </td><?php echo '<td><input type="text" name="LName" value="'.$_POST["LName"] . '"></td>';?></tr>
            <tr><td>Age:</td> <?php echo '<td><input type="text" name="Age" value="'.$_POST["Age"] . '"></td>';?></tr>
            <tr><td><input type="submit" name="submit" value="submit"></td></tr>
        </form>
        </table>
        <?php
                } else {
                  $Name = cleanUp($_POST["FName"]) . " " . cleanUp($_POST["LName"]);
                    echo "welcome " . $Name . "<br>";
                }
                if(empty($_POST["Age"])){
                    echo "Age field incomplete";
                ?>
        <table>
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="post">
            <tr><td>Forename: </td> <?php echo '<td><input type="text" name="FName" value="'.$_POST["FName"] . '"></td>';?></tr>
            <tr><td>surname: </td><?php echo '<td><input type="text" name="LName" value="'.$_POST["LName"] . '"></td>';?></tr>
            <tr><td>Age:</td> <?php echo '<td><input type="text" name="Age" value="'.$_POST["Age"] . '"></td>';?></tr>
            <tr><td><input type="submit" name="submit" value="submit"></td></tr>
        </form>
        </table>
        <?php
                } else {
                  $Age = cleanUp($_POST["Age"]);
                    echo "You're aged " . $Age;
                }
            }
            else{
        ?>
        <table>
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="post">
            <tr><td>Forename: </td> <td><input type="text" name="FName" value="John"></td></tr>
            <tr><td>surname: </td> <td> <input type="text" name="LName" value="Caroll"></td></tr>
            <tr><td>Age:</td> <td><input type="text" name="Age" value=""></td></tr>
            <tr><td><input type="submit" name="submit" value="submit"></td></tr>
        </form>
        </table>
        <?php
            }
        ?>
        <a href="index.php">Home</a>
	</body>
</html>