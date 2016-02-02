<?PHP
	// Ouverture du fichier geoJSON
	$fichier = 'adresses_fablab_bzh.geojson';
	$fp = fopen ($fichier, "r");
    	$contenu_du_fichier = fread ($fp, filesize($fichier));
    	fclose ($fp);
	
	// Décodage
	$json = json_decode ($contenu_du_fichier, true);
?>
<html>
<head>

	<!-- 
       
       =============================================================================
       	CARTE DES FABLABS DE BRETAGNE
       =============================================================================
       	Auteur : Guillaume ROUAN | http://guillaume-rouan.net | @grouan
       -----------------------------------------------------------------------------
       	Licence : CC BY
              Création : Octobre 2015
              Technos : OpenStreetMap + Mapbox + Leaflet
              Thématiques : FabLab, MakerSpace, HackerSpace, FrenchTech,
              		Cantine numérique, Tiers Lieux, Usages numériques
       -----------------------------------------------------------------------------
       
       -->
	<title>Carte des Fablabs de Bretagne</title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
       
       <!-- Feuille de style Leaflet + zone de carte -->
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css" />
       <style type="text/css">
		#map { 
			margin:0px;
			height:100%;
		}
	</style>
       
       <!-- Bibliothèques Javascript Leaflet + OpenLayers -->
       <script src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>
       <script src="http://www.openlayers.org/api/OpenLayers.js"></script>
       
       <!-- Paramétrages de la couche Mapbox + légende de la carte -->
       <script>
		ACCESS_TOKEN = 'XXX'; /* Voir http://www.mapbox.com pour en créer un */
		
		CM_ATTR = 'Donn&eacute;es carte &copy; contributeurs <a href="http://openstreetmap.org">OpenStreetMap</a>, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://cloudmade.com">CloudMade</a>';
		
		CM_URL = 'http://{s}.tile.cloudmade.com/d4fc77ea4a63471cab2423e66626cbb6/{styleId}/256/{z}/{x}/{y}.png';
		
		MB_ATTR = '<a href="http://openstreetmap.org" target="_blank">OpenStreetMap</a> + ' +
			'<a href="http://mapbox.com" target="_blank">Mapbox</a> | ' +
			'<a href="http://guillaume-rouan.net" target="_blank">Guillaume Rouan</a> <a href="http://creativecommons.fr/licences/" target="_blank">CC BY</a>';
		
		MB_URL = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=' + ACCESS_TOKEN;
		
		OSM_URL = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
		
		OSM_ATTRIB = '&copy; contributeurs <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> ';
	</script>
       
</head>

<body style="margin:0px;padding:0px;">
	
  <!-- LA CARTE -->
  <div id="map"></div>
  
  <!-- LES PARAMETRES DE LA CARTE -->
  <script>
	
/* === CENTRAGE DE LA CARTE SUR LA BRETAGNE === */
	var map = L.map('map').setView([48.145, -3.00], 8); /* zoom = 8 */
	
/* === ID MAPBOX === */
	L.tileLayer(MB_URL, {attribution: MB_ATTR, id: 'YYY'}).addTo(map);
	
/* === PARAMETRAGE DES MARKERS === */
	var 	LeafIcon = L.Icon.extend({ options: { iconSize: [35, 35]} });
	var 	hakerspace_Icon = new LeafIcon({iconUrl: 'http://guillaume-rouan.net/blog/wp-content/uploads/2015/10/osm_marker_hakerspace.png'}), /* HackerSpace */
		makerspace_Icon = new LeafIcon({iconUrl: 'http://guillaume-rouan.net/blog/wp-content/uploads/2015/10/osm_marker_makerspace.png'}), /* MakerSpace */
		tierslieu_Icon = new LeafIcon({iconUrl: 'http://guillaume-rouan.net/blog/wp-content/uploads/2015/10/osm_marker_tierslieu.png'}); /* TiersLieu */
		usages_Icon = new LeafIcon({iconUrl: 'http://guillaume-rouan.net/blog/wp-content/uploads/2015/10/osm_marker_usages.png'}); /* Usages */
		frenchtech_Icon = new LeafIcon({iconUrl: 'http://guillaume-rouan.net/blog/wp-content/uploads/2015/10/osm_marker_frenchtech.png'}); /* FrenchTech */
		fablabMIT_Icon = new LeafIcon({iconUrl: 'http://guillaume-rouan.net/blog/wp-content/uploads/2015/10/osm_marker_fablabMIT.png'}); /* FabLab MIT */
		fablab_Icon = new LeafIcon({iconUrl: 'http://guillaume-rouan.net/blog/wp-content/uploads/2015/10/osm_marker_fablab.png'}); /* FabLab */
		cantine_Icon = new LeafIcon({iconUrl: 'http://guillaume-rouan.net/blog/wp-content/uploads/2015/10/osm_marker_cantine.png'}); /* Cantine */
	
	
/* === AFFICHAGE DES MARQUEURS GEOLOCALISÉS === */
	
<?PHP	
	// Affichage
	foreach ($json['features'] as $data) {
		
		// Paramétrage
		$longitude = $data['geometry']['coordinates'][0];
		$latitude = $data['geometry']['coordinates'][1];
		if ($data['properties']['web'] != "") { $web = '<a href=\''.$data['properties']['web'].'\' target=\'_blank\'><img src=\'http://guillaume-rouan.net/blog/wp-content/uploads/2016/02/ico_30x30px_WEB.png\' title=\'Visitez '.$data['properties']['web'].'\' style=\'border-radius:3px;margin:3px;\' /></a>'; } else { $web = ''; }
		if ($data['properties']['twitter'] != "") { $twitter = '<a href=\'http://twitter.com/'.$data['properties']['twitter'].'\' target=\'_blank\'><img src=\'http://guillaume-rouan.net/blog/wp-content/uploads/2016/02/ico_30x30px_TW.png\' title=\'Suivez '.$data['properties']['twitter'].'\' style=\'border-radius:3px;margin:3px;\' /></a>'; } else { $twitter = ''; }
		
		// Création des marqueurs
		echo 'L.marker(['.$latitude.','.$longitude.'], {icon: '.$data['properties']['structure'].'_Icon}).bindPopup("<b style=\'font-size:1.2em;text-transform:uppercase;\'>'.$data['properties']['name'].'</b><br />'.$data['properties']['adresse'].'<br />'.$data['properties']['cp'].' '.$data['properties']['ville'].'<br />'.$web.' '.$twitter.'").addTo(map);';
		echo "\n";
		
	}
?>
     
	
	</script>
       
<?PHP /* Pour affichage => <iframe src="fablabzh_map.php" style="border:0px;width:100%;height:400px;border-radius:5px;"></iframe> */	?>

</body>
</html>
