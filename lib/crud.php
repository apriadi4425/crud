<?php
	class Crud {
		
		var $host, $username, $password, $database;
		private $db;
		
		public function __construct($host = 'localhost', $username = 'admin', $password = 'selamanya48', $database = 'workshop'){
			$this->db = new mysqli($host, $username, $password, $database);
			
		}
		
		//show data
		
		public function get($table,$where = null){
			if($where != null || $where != ''){
				if(is_array($where)){
					foreach($where as $key => $value){
						$k[] = $key." = '".$value."'";
					}
					$k = implode(" AND ", $k);
				}else{
					$k = $where;
				}
				$data = $this->db->query("SELECT * FROM $table WHERE $k");
			}else{
				
				$data = $this->db->query("SELECT * FROM $table");
			}
			return $data;
		}
		
		//Insert data
		
		public function insert($table,$data){
			foreach($data as $key => $value){
				$k[] = $key;
				$v[] = "'".$value."'";
			}
			$k = implode(",",$k);
			$v = implode(",",$v);
			
			return $this->db->query("INSERT INTO $table ($k) VALUES($v)");
		}
		
		//Update data
		public function update($table,$data,$where){
			if(is_array($where)){
				foreach($data as $key => $value){
					$k[] = $key." = '".$value."'";
				}
				$k = implode(",",$k);
			}else{
				$k = $data;
			}
			if(is_array($where)){
					foreach($where as $key => $value){
						$w[] = $wkey." = '".$value."'";
					}
					$w = implode(" AND ", $w);
					
			}else{
				$w = $where;
			}
			
			return $this->db->query("UPDATE $table SET $k WHERE $w");
		}
		
		
		
	}
	
	$crud = new Crud;
	
	
	
?>
