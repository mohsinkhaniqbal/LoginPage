<?php


session_start();

if(!isset($_SESSION['name'])){
    header('location:Login.php'); 
}

?>

<html>
    <head>
        <title> Home Page</title>
        <link rel="stylesheet" type="text/css" href="Style.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    </head>
    
    <body>
        
        <div class="container">
            
        <a class="float-right" href="Logout.php"> Logout </a>
        <h1>Welcome <?php echo $_SESSION['name']; ?> </h1>
            
        </div>
    </body>

    
</html>