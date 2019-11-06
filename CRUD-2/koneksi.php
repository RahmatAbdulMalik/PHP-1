<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CRUD</title>
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<script src="./assets/js/bootstrap.min.js"></script>
	<script src="./assets/js/jquery-3.3.1.js"></script>
	<script src="./assets/js/jquery.dataTables.min.js"></script>
	<script src="./assets/js/dataTables.bootstrap4.min.js"></script>

	<script>
		$(document).ready(function() {
			$('#table_data').DataTable();
		});
	</script>
</head>
<?php 

$db = new mysqli("localhost","root","","11rpl1_db");

	if (mysqli_connect_errno()) {
		echo "Error : " . mysqli_connect_error();
	}

?>