<?
 session_start();
?>
<!DOCTYPE html>
<head>
</head>
<body>
<?
header("X-XSS-Protection: 0");
?>

<style>
ul{list-style:none;}
</style>

<form name="member_form" method="post" action="dbtest.php">
<table align="center" >
<tr>
   <td><label>ID</label></td>
   <td><input type="text" name="id" class="login_input"></td>
</tr> 
<tr>
   <td><label>PW</label></td>
   <td><input type="password" name="pass" class="login_input"></td>
</tr>
<tr>
   <td colspan="2" align="right">
  <input type="submit" value="login">
  </td>
</tr>
</table>
<!--id is 7361646c6f6e656c796d616e-->
</form>


</body>
</html>