<?php 
if(file_exists(dirname(__FILE__)."/process.php"))
require_once(dirname(__FILE__)."/process.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $error = array();

    if( $name == NULL ){
        $error['name'] = "Name is required.";
    }
    if( $email == NULL ){
        $error['email'] = "Email is required.";
    }

    if( count($error) == 0 ){
        $personInfo = new Person();
        $personInfo->setName($name);
        $personInfo->setEmail($email);

        $infoName = $personInfo->getName();
        $infoEmail = $personInfo->getEmail();
    }
}


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
                    <h2>Our Form</h2>
                    <p>Put your name and email address to check</p>
                    <hr>
                </div>
                <form action="" method="POST">
                    <input type="text" name="name" id="name" placeholder="Your Name"> 
                    <input type="email" name="email" id="" placeholder="Email Address"> 
                    <input type="submit" value="Submit" name="submit">
                </form>
                <div class="personal-info">                    
                     <?php if(isset($infoName)){echo "<h2>Name : ".$infoName."</h2>"; } ?>               
                     <?php if(isset($infoEmail)){echo "<h2>Name : ".$infoEmail."</h2>"; } ?>
                </div>
                <div class="midle-footer">
                    <p>Click on <a href="info.php">Info</a> to see another output of assignment</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>