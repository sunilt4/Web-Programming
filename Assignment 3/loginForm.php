<h1 >Login to my Website</h1>
                      
                      
<form action="checkUser.php" method="POST">
  
    <table class="formTable">
        <tr>  
            <td class="labelColumn"><label for="email">Email</label></td> 
            <td class="inputColumn"><input type="text" width=20 name="email" id="email"></td>
     </tr>
     <tr>
         <td class="labelColumn"><label for="password">Password</label></td>
         <td class="inputColumn"><input type="password" width=20 name="password" id="password"></td>
     </tr>
     <tr> 
         <td colspan="2" style="text-align:center"><input type="submit" class="submitButton" value="Login"></td>
     </tr>
     
     <tr>
         <td colspan="2" style="text-align:center"><br>Don't have an account?  
             <a href="index.php?param=signup">Click here to register</a>
         </td>
     </tr>
    </table> 
 </form>
           