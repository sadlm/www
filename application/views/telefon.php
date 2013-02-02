<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">

		<ul>
			<?php foreach($rows as $key => $value): ?>
			   

				<li><?php echo $value->Name ?> <?php echo $value->adres ?> <?php echo $value->tel ?></li>			

			<?php endforeach; ?>
		</ul>

		<h2>All records</h2>
		<ul>
			<?php foreach($all_data as $key => $value): ?>

				<li><?php echo $value->Name ?> <?php echo $value->adres ?> <?php echo $value->tel ?></li>		

			<?php endforeach; ?>
		</ul>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>