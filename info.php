<?php 

if(file_exists(dirname(__FILE__)."/process.php"))
require_once(dirname(__FILE__)."/process.php");

$personObject = new Person("Mohammad Sabuj Khan", "mohammadsabuj@khan.com");
$name = $personObject->getName();
$email = $personObject->getEmail();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Project based on Module - 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="form-area">
                <div class="heading">
                    <p>Displaying the properties value by creating instance of the Person class</p>
                    <hr>
                </div>
               
                <div class="info-personal">                    
                     <div class="single"><h2>Name : <?php echo $name; ?></h2>  </div>            
                     <div class="single"><h2>Email : <?php echo $email; ?></h2> </div>
                </div>
                <div class="midle-footer">
                    <p>Click on <a href="index.php">Information</a> to see another output of assignment</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>