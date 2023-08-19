<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" />
    <style>
      * {
      	-webkit-user-drag:none;
      	-moz-user-drag:none;
      	-o-user-drag:none;
      	user-drag:none;
      	-webkit-user-select:none;
      	-moz-user-select:none;
      	-o-user-select:none;
      	user-select:none;
      	font-family:"Helvetica Neue", Helvetica, Arial,"PingFang SC", "Hiragino Sans GB", "Heiti SC", "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif;
      }
      .display {
        position:absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        text-align: center;
      }
      .replit-auth-button {
	      background-color: rgba(0,0,0,0.4);
	      box-shadow:rgb(0 0 0 / 37%) 0px 3.2px 7.2px 0px,rgb(0 0 0 / 35%) 0px 0.6px 1.8px 0px;
        color: white;
        border: none;
        padding: 10px;
        margin-top: 10px;
        border-radius: 8px;
        transition: background-color 0.2s
      }
      .replit-auth-button:hover {
        background-color: rgba(0,0,0,0.6);
      }
    </style>
  </head>
  <body>
    <div class="bg"></div>
    <script src="js/bg.js"></script>
    <div class="display">
      <?php
$name = $_SERVER['HTTP_X_REPLIT_USER_NAME'];
$id = $_SERVER['HTTP_X_REPLIT_USER_ID'];
if ($name && $id) {
  echo 'Hello, '.$name.'!';
} else {
  echo 'Welcome to DEBIRooM! ';
}
?><br>
      <script>
      if (document.documentMode) {
        alert("Your browser is out of date!\nUpdate your browser to view this website correctly.");
        window.open('','_self').close();
      } 
      </script>
      <script src="https://auth.util.repl.co/script.js" authed="window.location.href = '../';"></script>
    </div>
  </body> 
</html>