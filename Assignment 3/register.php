<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
        <title>Registration Status</title>
        
             
    </head>
    <body class="background">
        
        <h1>Registration Status</h1>
        
        <p class="message">
<?php
error_reporting(E_ERROR | E_PARSE);
 require('db.php');

if ($_POST[email]=='' || $_POST[password]=='' || $_POST[role]==''){
    echo "The user has not entered all mandatory information.  Please ensure to enter the
        email, password, and the role.
        To try again,  <a href=\"index.php?param=signup\">click here</a>";
} else {
    connectDB();
    $query = "SELECT id FROM users WHERE username='$_POST[email]'";
    $result= mysql_query($query);
    $row = mysql_fetch_array( $result );
    if ($row!=NULL){
        echo "This user name/password already exists on this website. <a href=\"index.php?param=signup\"> Click here to try again.</a>";
    } else {
       //create the user
        
        $password = md5($_POST[password]);
        $query = "INSERT INTO users (username, password, role, created) VALUES ('$_POST[email]','$password','$_POST[role]','" . date("Y-m-d H:i:s") . "');";
        mysql_query($query);  
        echo "You have registered successfully.  <a href='index.php'>Click here to go to the login page.</a>";
    }
 }
    disconnectDB();
?>
        </p>
    </body>
</html>

