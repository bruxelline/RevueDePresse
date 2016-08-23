<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
<title>Rechercher article</title>
    <link rel="stylesheet" href="./CSS/normalize.css"/>
	<link rel="stylesheet" href="./css/style.css"/>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/core.css"> 
    <script type="text/javascript" src="./RevuePresse/script.js"></script>
</head>	
	
<body>  
<?php

  require_once("./includes/header.php");
  require_once("./includes/nav.php");

  if(!empty($_GET['page'])){
 	require_once('./pages/'.$_GET['page']);
 }

  require_once("./includes/footer.php");

?>
<div id="container">
</div>
</body>
</html>
