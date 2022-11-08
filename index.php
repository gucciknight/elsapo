<?php

$url = "https://api.demo.sitehost.co.nz/1.0/srs/list_domains.json?client_id=293785&apikey=d17261d51ff7046b760bd95b4ce781ac";

$json = file_get_contents( $url );
$arr = json_decode( $json, TRUE );
foreach ( $arr AS $element ) {
    foreach ( $element AS $e ) {
      echo $e['domains'] . '<br>';
    }
  }
?>