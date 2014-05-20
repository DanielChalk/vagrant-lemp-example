<?php

try
{
	$db_host = "127.0.0.1";
	$db_user = "example_user";
	$db_name = "example_db";
	$db_password = "example_passwd";
	$db = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_password);
	?>
	<h1>Success</h1>
	<p>Connected to <?php echo $db_host ?>/<?php echo $db_name ?> as 
		<?php echo $db_user ?> identified by <?php echo $db_password ?>.</p>
	<?php
}
catch(Exception $e)
{
	?>
	<h1>Error</h1>
	<p><?php echo $e->getMessage() ?></p>
	<textarea><?php echo $e->getTraceAsString() ?></textarea>
	<?php
}