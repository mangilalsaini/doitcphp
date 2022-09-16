<?php
     $fruitsname = ['Apple','Banana','Orange','Mango','Kiwi'];
     $i = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>whileloop</title>
</head>
<body>

            <h1> Fruits in Inventory : </h1>
            <ul>
           <?php while($i < count($fruitsname)){ 
            ?>
            <li> <?= $fruitsname[$i] ?></li>
            <?php
                $i++;
            } 
            ?>
            </ul>
    
</body>
</html>