<?php include('settings/db.php'); ?>

<?php
	
	// Fetching CORE team
	$coreT_sql = mysqli_query($conn,"SELECT * FROM `cCommunity` WHERE level='CORE'");
	
	// Fetching Intern team
	$internT_sql = mysqli_query($conn,"SELECT * FROM `cCommunity` WHERE level='INTERN'");

?>

