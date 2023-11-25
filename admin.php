<?php 
// $wfsUrl =  file_get_contents("http://localhost:8080/geoserver/diy/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=diy%3Apersons_full&maxFeatures=50&outputFormat=application%2Fjson"); 

# Ubah URL pada file_get_contents sesuai alamat file pada geoserver  
$wfsUrl =  
//polygon
file_get_contents("http://geoportal.sumbarprov.go.id/geoserver/ows?service=WFS&version=1.0.0&request=GetFeature&typename=geonode%3ABATAS_ADMINISTRASI_PADANG_AR&outputFormat=json&srs=EPSG%3A4326&srsName=EPSG%3A4326");  
header('Content-type: application/json'); 
echo ($wfsUrl); 