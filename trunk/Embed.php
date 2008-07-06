<?
require_once("config.php");
$format = $_REQUEST['format'] ? $_REQUEST['format'] : 'json';
$url = $_REQUEST['url'];
$manager = ProviderManager::getInstance();
if ($format=="xml"){
header('Content-type: application/xml');
} else if ($format=="serialized"){
} else {
header('Content-type: application/json');
}
try{
echo $manager->provide($url,$format);
 } catch (Exception $e){
 header("HTTP/1.0 404 Not Found");
}
