<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php


$can =@mysql_connect("localhost", "root", "")or die ("Não foi dessa vez que você conseguiu tente novamente mais tarde!");
mysql_select_db("video", $scon)or die();
?>
</body>
</html>
