<?php
//include "Model/Model.php";

if (isset($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action = "";
}

switch ($action) {
case 'add':{
		if (isset($_POST['add-user'])) {
			$id = $_POST['id'];
			$full_name = $_POST['full_name'];
			$email = $_POST['email'];
			$rank = $_POST['rank'];
			$is_active = $_POST['is_active'];
			$created_at = $_POST['created_at'];

			$db->insertDB($id, $full_name, $email, $rank, $is_active, $created_at);
		}

		require_once 'View/newuser.php';
		break;
	}
case 'update':{
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$table = "user";
			$dataID = $db->getDBid($table, $id);
			if (isset($_POST['update-user'])) {
				$full_name = $_POST['full_name'];
				$email = $_POST['email'];
				$rank = $_POST['rank'];
				$is_active = $_POST['is_active'];
				$created_at = $_POST['created_at'];
				if ($db->updateDB($id, $full_name, $email, $rank, $is_active, $created_at)) {
					header('location: index.php?controller=user&action=list');
				}

			}
		}
		require_once 'View/update.php';
		break;
	}
case 'list':{
		$table = "user";
		$data = $db->getAllDB($table);
		require_once 'View/list.php';
		break;
	}
case 'info':{
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$table = "user";
			$dataID = $db->getDBid($table, $id);
		}
		require_once 'View/info.php';
		break;
	}
case 'delete':{
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$table = "user";
			$dataID = $db->getDBid($table, $id);
			if ($db->deleteDB($id)) {
				header('location: index.php?controller=user&action=list');
			}
		}
		require_once 'View/info.php';
		break;
	}
default:{
		$table = "user";
		$data = $db->getAllDB($table);
		require_once 'View/list.php';
		break;
	}
}

?>