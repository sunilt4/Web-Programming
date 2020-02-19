<html>
    <head>
         <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
        <title>My website: login and registration page</title>
        
             
    </head>
    <body class="background">
            
       
        <div class="mainDiv">
            <?php
            error_reporting(E_ERROR | E_PARSE);
                if ($_GET['param']=="signup"){
                     require('registerForm.php');
                     
                    
                }
                else {
                    require('loginForm.php');
                   
                   
                }
                
            ?>
            
        </div>     
         
    </body>
</html>
