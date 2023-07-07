<?php
if(isset($_GET["sumbit"])){
if(isset($_GET["num1"])&& isset($_GET["num2"]))
{
	$num1=$_GET["num1"];
	$num2=$_GET["num2"];
	$res=$num1+$num2;
}
}
?>
<html>
<form>
<table>
<tr>
   <td>
     <label>First number:</label>
     <input type="text"name="num1">
   </td>
</tr>
<tr>
   <td>
  <label>Second number:</label>
  <input type="text"name="num2">
  </td>
</tr>
<tr>
   <td>
  <button type="submit" name="sumbit">sumbit</button><br>
  <br>Result:<input type='text' value="<?php echo $res; ?>"><br>
  </td>
</tr>
</table>
</form>
</body>
</html>