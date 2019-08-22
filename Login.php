

<!DOCTYPE html>
<?php


 include 'verify.php';


?>
<html>
<body>

<h2>HTML Forms</h2>
<form method="POST">
<table>
 
<tr>
  <td>Username</td>
   <td> <input type="text" name="user" placeholder="Mickey"></td>
</tr>
<tr>
  <td>Password</td>
   <td> <input type="password" name="pass" placeholder="Mickey"></td>
</tr>
 <tr>
   <td>
  Select user type:<select name="usertype">
     <option value="admin">Admin</option>
      <option value="user">User</option>
     
    </select>
  </td>
</tr>
<tr>
  
 <td> <input type="submit" name="Login" value="Login"></td>
</tr>


</table>
</form> 
</body>
</html>

