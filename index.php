<!DOCTYPE html>
<?php
$url = "images\h1.jpg";
?>

<head>
  <style>

  input[type=text] {
      width: 50%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 2px solid red;
      border-radius: 4px;
  }

</style>
<style>
input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
}

</style><style>
 input[type=submit] {
    background-color: red;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
  <title>Login</title>

</head>
<body background="images\h1.jpg" >
<!--background-image:url('<?php echo $url ?>');-->



    <h1><font color="red"><CENTER>LOGIN </CENTER></font></h1>


   <form action=check.php>
  <center><font color="red">USER NAME </font><input type="text" name ="t1"></center>
  <center><font color="red"> PASSWORD </font> <input type="password" name="t2"></center>
    <center style="margin-top:10px;margin-left:40px;"><input type="submit" value="Login"></center>

    </form>



</body>
</html>
