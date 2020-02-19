<h1>Registration page</h1>
                      
<p>
    Use this page to register to use this website.  
    All information below must be provided. If you already have credentials to enter this website,
    <a href="index.php">click here</a> to go to the login page.
</p>    
    
<form action="register.php" method="POST">
  
    <table class="formTable">
        <tr>  
            <td class="labelColumn"><label for="email">Email</label></td> 
            <td class="inputColumn"><input type="text" width=20 name="email" id="email"></td>     
        </tr>
        <tr> 
            <td colspan="2"><em>Always use your email as your user name.</em></td>
        </tr>    
     <tr>
         <td class="labelColumn"><label for="password">Password</label></td>
         <td class="inputColumn"><input type="password" width=20 name="password" id="password"></td>
     </tr>
     
       <tr>  
            <td class="labelColumn"><label for="role">Role</label></td> 
            <td class="inputColumn"><input type="text" width=20 name="role" id="role"></td>     
        </tr>
        
     <tr> 
         <td colspan="2" style="text-align:center"><input type="submit" class="submitButton" value="Login"></td>
     </tr>
     
     <tr>
         <td colspan="2" style="text-align:center"><br>Have an account?  
             <a href="index.php">Click here to access the login page.</a>
         </td>
     </tr>
    </table> 
  </form>