<?php
require("../includes/constants.php");
require("../includes/functions.php");


$y=query("SELECT * FROM catalogo WHERE Id=?",$_GET['nombre'])[0];


require("../templates/Header.php");
require("../templates/jor.php");
?>