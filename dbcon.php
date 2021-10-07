<?php
	$server = "local";
	$user = "root";
	$password = "";
	$db = "assignment";

	$con = new mysqli($server,$user,$password,$db);
	if ($con) {
		?>
			<script>
				alert("connection successful");
			</script>
		<?php
	}else{
		?>
			<script>
				alert("no connection");
			</script>
		<?php
	}

?>