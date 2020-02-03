<?php
	class Database{
		private $servername = "localhost:3306";
		private $username = "root";
		private $password = "Tdt2196@";
		private $dbname = "baitap";
		private $conn = NULL;
		private $result = NULL;


		public function openDB(){

			$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			if(!$this->conn){
				echo "kket noi that bai";
				exit();
			}			
			return $this->conn;
		}

		public function execute($sql){
			$this->result = $this->conn->query($sql);
			return $this->result;
		}
		public function getDB(){
			if($this->result){
				$data = mysqli_fetch_array($this->result);
			}
			else{
				$data = 0;
			}
			return $data;
		}
		public function getDBid($table,$id){
			$sql = "SELECT * FROM $table WHERE id='$id'";
			$this->execute($sql);
			if($this->num_rows()!=0){
				$data = mysqli_fetch_array($this->result);
			}
			else{
				$data = 0;
			}
			return $data;
		}
		public function getDBidblog($id){
			$sql = "SELECT * FROM blog left join user on user.id = blog.user_id where blog.id='$id'";
			$this->execute($sql);
			if($this->num_rows()!=0){
				$data = mysqli_fetch_array($this->result);
			}
			else{
				$data = 0;
			}
			return $data;
		}
		public function getAllDB($table){
			$sql = "SELECT * FROM $table";
			$this->execute($sql);
			if($this->num_rows()==0){
				$data = 0;
			}
			else{
				while ($datas = $this->getDB()) {
					$data[] = $datas;
					# code...
				}
			}
			return $data;
		}
		public function getAllDBblog($table){
			$sql = "SELECT * FROM $table ORDER BY created_at desc "  ;
			$this->execute($sql);
			if($this->num_rows()==0){
				$data = 0;
			}
			else{
				while ($datas = $this->getDB()) {
					$data[] = $datas;
					# code...
				}
			}
			return $data;
		}
		public function num_rows()
		{
			if($this->result){
				$num = mysqli_num_rows($this->result);
			}
			else{
				$num = 0;
			}
			return $num;
		}


		public function insertDB($id, $full_name, $email, $rank, $is_active, $created_at){
			$sql = ("INSERT INTO user values('$id','$full_name','$email','$rank','$is_active','$created_at')");
    		return $this->execute($sql);
		}

		public function updateDB($id, $full_name, $email, $rank, $is_active, $created_at){
			$sql = ("UPDATE user SET full_name = '$full_name', email = '$email', rank = '$rank', is_active = '$is_active', created_at = '$created_at' where id = '$id'");
    		return $this->execute($sql);
		}

		public function deleteDB($id)
		{
			$sql = ("DELETE FROM user WHERE id = '$id'");
			return $this->execute($sql);
		}
	}
	
?>