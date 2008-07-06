<?php
$xml = simplexml_load_file("providers.xml");

foreach($xml->provider as $provider){
echo $provider->url;
echo $provider->endpoint;
}

