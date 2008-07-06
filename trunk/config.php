<?php
define("PROVIDER_XML","providers.xml");
define("TEMPLATE_PATH","templates/");
function __autoload($classname){

  if(file_exists($x=$classname.".class.php")) {
    require_once($x);
  }
/*
  if(file_exists($x="meta/".$classname.".php")) {
    require_once($x);
  } else if (file_exists($x="exceptions/".$classname.".php")){
    require_once($x);
  } else if (file_exists($x="services/".$classname.".php")){
    require_once($x);
  } else if (file_exists($x="entities/".$classname.".php")){
    require_once($x);
  }
  */
}
?>
