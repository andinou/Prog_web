<?php
$nom=$_GET["nombat"];
$json_string=file_get_contents('buildings.geojson');
$data=json_decode($json_string, true);

foreach($data['features'] as $i => $etu){
    if(isset($data['features'][$i]['properties']['name'])){
    $name=($data['features'][$i]['properties']['name']);
        if(strpos(strtoupper($name), strtoupper($nom))!=false){
        echo "<tr><td>".$name."</td> 
        <td><button id='detail' >Détail</button></td> </tr>";
        }
    }
    
}

    
?>