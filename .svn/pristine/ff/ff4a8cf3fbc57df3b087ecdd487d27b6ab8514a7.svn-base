<?php

if(empty($_GET['page'])) { 
include("pages/homepage.php");
 } else { 
 if(file_exists("pages/".$_GET['page'].".php")) { 
 include("pages/".basename($_GET['page']).".php"); 
 } else { 
 echo 
    	include("pages/404.php"); 
     '<b><font size="5">Error 404</font></b>
 <br/><br/>La página solicitada no existe'; 
 } }

?>