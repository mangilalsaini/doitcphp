<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
       
        $fristname = $_REQUEST['firstName'];
        $lastname = $_REQUEST['lastName'];

        if(empty($fristname) && empty($lastname)){
            echo "<h1> Please fill your first name and last name";
        }        
        elseif(empty($fristname)){
            echo "<h1> Name is : $lastname </h1>";
        }
        elseif(empty($lastname)){
            echo "<h1> Name is : $fristname </h1>";
        }
        else{
            echo "<h1> Name is : $fristname $lastname </h1>";
        }
    ?>
    
</body>
</html>