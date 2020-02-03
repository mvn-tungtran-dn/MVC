<?php
  include "Model/Model.php";
  $db = new Database();
  $db->openDB();

  if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
  }
  else{
    $controller = "";
  }

  switch ($controller) {
    case 'user':{
      require_once('Controller/user/user.php');
      break;
    }
    case 'blog':{
      require_once('Controller/blog/blog.php');
      break;
    }  
    
    
  }


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
  <a href="index.php?controller=user&action=list" title="">User</a><br>
  <a href="index.php?controller=blog&action=listblog" title="">Blog</a><br>
</body>
</html>