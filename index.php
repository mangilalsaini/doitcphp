<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP First Page</title>
</head>
<body>
    
    <form action="home.php" method="$_GET">
       <label for="first name">Enter Your First Name : </label>
       <input type="text" name="firstName" id="fname">
       <label for="last name">Enter Your Last Name : </label>
       <input type="text" name="lastName" id="lname">
       <input type="submit" value="Submit">
    </form>
    
    
    <?php

            $fruitsname = ['Apple','Banana','Orange'];
            $i = 0;
            echo "Fruits in Inventory : <ul>";
            while($i < count($fruitsname)){
                echo "<li>$fruitsname[$i]</li>";
                $i++;
            }
            echo "</ul>";
    ?>

    
</body>
</html>