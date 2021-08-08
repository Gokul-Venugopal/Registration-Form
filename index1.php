
  
  
<!DOCTYPE HTML>
<html>
<center>
<head ><big ><b><font color="purple"  >Moolya Registration Portal </font></b></big>
 
  <title>Moolya User Registration Portal</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style=style="background-color:grey;" >

 <form action="insert.php" method="POST">
   <div>
   <p>
  <table>
    <div>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <div>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" required></td>
   </tr>
   </div>
   <div>
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="m" required>Male
     <input type="radio" name="gender" value="f" required>Female
    </td>
   </tr>
   </div>
   <div>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr> 
   </div>
   <div>
   <tr>
    <td>Phone no :</td>
    <td>
     <select name="phoneCode" required>
      <option selected hidden value="">Select Code</option>
      <option value="91">91</option>
      <option value="81">81</option>
      <option value="0469">0469</option>
      
     </select>
     <input type="phone" name="phone" required>
    </td>
   </tr>
   </div>
   <div>
   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
  </div>
  </table>
</p>
</div>
</center>

 </form>
 
</body>

</html>

