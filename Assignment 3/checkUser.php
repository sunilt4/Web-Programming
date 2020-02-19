<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
        <title>My website: login and registration page</title>
        
             
    </head>
    <body class="background">
        <h1>Login Status</h1>
        <p class="message">
<?php 
    error_reporting(E_ERROR | E_PARSE);
        require('db.php');


if ($_POST[email]=='' || $_POST[password]==''){
    echo "The user has not entered a user name or password.  To try again, 
        <a href=\"index.php\">click here</a>";
} else {
    connectDB();
    $password = md5($_POST['password']);
    $query = "SELECT id FROM users WHERE username='$_POST[email]' AND password='$password'";
    $result= mysql_query($query);
    $row = mysql_fetch_array( $result );
    if ($row==NULL){
      echo "The user-name / password combination does not exist.  To try again, 
        <a href=\"index.php\">click here</a>";
    } else {
       echo "Login successful.";
    }
 }

disconnectDB();
?>
        </p>
    </body>
</html>

