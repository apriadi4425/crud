<?php
	if(isset($_GET['stat'])){
		if($_GET['stat'] == 'success'){
			echo "<h3>Success</h3>";
		}else{
			echo "<h3>Error</h3>";
		}
	}
?>

<form method = "post" action = "crud/insert.php">
	<input type="text" name = "title">
	<input type="date" name = "date">
	<button type="submit">Send</button>
</form>

