<?php

require "../lib/crud.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$array = array();
			foreach ($_POST as $key => $value) {
			   $array[] = array(htmlspecialchars($key)=> htmlspecialchars($value));	  
			}
		$data = call_user_func_array('array_merge', $array);

		$result = $crud->insert('tutorial',$data);
		
		if($result === true){
			header('Location: ' . $_SERVER['HTTP_REFERER']. "?stat=success");
		}else{
			header('Location: ' . $_SERVER['HTTP_REFERER']. "?stat=failed");
		}
	}
?>