<?php
$nom=$_GET['Nombat'];
$json_string=file_get_contents('buildings.geojson');
$data=decode($json_string, true);
foreach($data['FEATURES'] as $i => $etu){
    $name=$data['FEATURES'][$i]['name'];
}
    
?>