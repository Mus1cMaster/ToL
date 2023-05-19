<?php
session_start(); $username = $password = $userError = '';
if(isset($_POST['sub'])){
  $username = $_POST['username'];
  if($username === 'Theo'){
    $_SESSION['login'] = true; header('LOCATION:index.php'); die();
  }
  if($username !== 'admin')$userError = 'Invalid Username';
}
?>
<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
   <head>
     <meta http-equiv='content-type' content='text/html;charset=utf-8' />
     <title>Login</title>
     <style type='text.css'>
       @import common.css;
     
     </style>
   </head>
<body>
  <form name='input' action='<?php echo $_SERVER['PHP_SELF'];?>' method='post'>
    <label for='username'></label><input type='text' value='<?php echo $username;?>' id='username' name='username'/> 
    <div class='error'><?php echo $userError;?></div>
    <input type='submit' value='Login' name='sub' />
  </form>
  <script type='text/javascript' src='common.js'></script>
</body>
</html>