<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>

<div id="container">
	<body> Name<br></body>
	<form action='' method= 'post'>
<input type="text" name="Name" size="10"  value=""><br>
<body>Adres<br></body>
<input type="text" name="adres" size="10"  value=""><br>
<body>Tel <br> </body>
<input type="text" name="tel" size="10"  value=""><br>
<input type="submit" name='submit' value='input' >
</form>
<?php
//$name=$_POST('Name');
//$adres=$_POST('adres');
//$tel=$_POST('tel');
//echo $_POST['Name'];
	$infoN = $_POST['Name'];
	$infoA = $_POST['adres'];
	$infoT = $_POST['tel'];
	//echo $infoN, $infoA,$infoT;

	//$this->load->model ('telefonviews', 'infoN'=>$infoN , 'infoA'=>$infoA ,'infoT'=>$infoT );

/*$sql = "INSERT INTO telefon (Name, adres, tel) 
        VALUES (".$this->db->escape($_POST['Name']).", ".$this->db->escape($_POST['adres']).",".$this->db->escape($_POST['tel']).")";

$this->db->query($sql);*/

?>
</div>

</body>
</html>