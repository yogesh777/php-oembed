<?php
require_once("config.php");
$x=new LazyTemplateEngine();
$x->setScriptPath("templates/");
$y= new LinkEmbed();
$y->version="bumm";
//$y->setScriptPath("templates/");
//echo $y->getClassName();
var_dump($y);
$x->hello = "szia";
$x->content=$y->renderClass();
echo $x->render("Main.template.php");

