<?php
  //include "Model/Model.php";

  if(isset($_GET['action'])){
    $action = $_GET['action'];
  }
  else{
    $action = "";
  }
  switch ($action) {
  	case 'listblog':{
  		$table = "blog";
    	$data = $db->getAllDBblog($table);
  		require_once('View/blog.php');
      	break;
  	}
  	case 'infoblog':{
  		if(isset($_GET['id'])){
    		$id = $_GET['id'];
    		$table = "blog";
    		$dataID = $db->getDBidblog($id);
    	}
    	require_once('View/infoblog.php');
    	break;
  	}	
  	
  	default:
  		$table = "blog";
    	$data = $db->getAllDBblog($table);
  		require_once('View/blog.php');
      	break;
  }


 ?>