<?PHP
	/*	La carte des FabLabs & autres lieux de dissémination des usages numériques en Bretagne
		======================================================================================
		Auteur : Guillaume Rouan | @grouan
		Blog : http://guillaume-rouan.net
		--------------------------------------------------------------------------------------
		=> La carte des FabLabs de Bretagne : http://guillaume-rouan.net/blog/2015/10/10/carte-des-fablab-de-bretagne/
		=> La liste des FabLabs de Bretagne : http://guillaume-rouan.net/blog/fablabzh_map/fablabs_bzh_liste.php
		=> Sources : https://github.com/grouan/bzh_fablab
		--------------------------------------------------------------------------------------
	*/

	// Variable de tri
	$tri = isset($_GET['tri']) ? $_GET['tri'] : 'name';
	
	// Sources : Github
	$json_source = file_get_contents('https://raw.githubusercontent.com/grouan/bzh_fablab/master/map_bzh_fablab.geojson');
	$json_data = json_decode($json_source, true);  // Dans un tableau
	
	$nb_references = count ($json_data['features']); // nombre de références
	
	for ($i=0; $i < $nb_references; $i++) {
		
		// [ id | name | structure | adresse | cp | ville | web | twitter | facebook | longitude | latitude ]
		$tab_liste [$i]['id'] = $json_data['features'][$i]['properties']['id'];
		$tab_liste [$i]['name'] = $json_data['features'][$i]['properties']['name'];
		$tab_liste [$i]['structure'] = $json_data['features'][$i]['properties']['structure'];
		$tab_liste [$i]['adresse'] = $json_data['features'][$i]['properties']['adresse'];
		$tab_liste [$i]['cp'] = $json_data['features'][$i]['properties']['cp'];
		$tab_liste [$i]['ville'] = $json_data['features'][$i]['properties']['ville'];
		$tab_liste [$i]['web'] = $json_data['features'][$i]['properties']['web'];
		$tab_liste [$i]['twitter'] = $json_data['features'][$i]['properties']['twitter'];
		$tab_liste [$i]['facebook'] = $json_data['features'][$i]['properties']['facebook'];
		$tab_liste [$i]['longitude'] = $json_data['features'][$i]['geometry']['coordinates'][0];
		$tab_liste [$i]['latitude'] = $json_data['features'][$i]['geometry']['coordinates'][1];
	}
	
	// Tri
	foreach($tab_liste as $k => $v) { $tab_tri[$k] = $v[$tri]; }
	 
	array_multisort($tab_tri, SORT_ASC, $tab_liste);
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Carte des FabLabs de Bretagne : la liste</title>
       
       <link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">
       
       <style>
		
		@font-face {
			font-family: 'Lato-Black';
			src: url('font/Lato-Black.eot');
			src: local('Lato Black'), local('Lato-Black'), url('font/Lato-Black.ttf') format('truetype'),
			     url('font/Lato-Black.woff') format('woff'),
			     url('font/Lato-Black.woff2') format('woff2'),
			     url('font/Lato-Black.eot?#iefix') format('embedded-opentype');
			font-weight: normal;
			font-style: normal;
		}
		@font-face {
			font-family: 'Lato-Thin';
			src: url('font/Lato-Thin.eot');
			src: local('Lato Thin'), local('Lato-Thin'), url('font/Lato-Thin.ttf') format('truetype'),
			     url('font/Lato-Thin.woff') format('woff'),
			     url('font/Lato-Thin.woff2') format('woff2'),
			     url('font/Lato-Thin.eot?#iefix') format('embedded-opentype');
			font-weight: normal;
			font-style: normal;
		}
		@font-face {
			font-family: 'Lato-Bold';
			src: url('font/Lato-Bold.eot');
			src: local('Lato Bold'), local('Lato-Bold'), url('font/Lato-Bold.ttf') format('truetype'),
			     url('font/Lato-Bold.woff') format('woff'),
			     url('font/Lato-Bold.woff2') format('woff2'),
			     url('font/Lato-Bold.eot?#iefix') format('embedded-opentype');
			font-weight: normal;
			font-style: normal;
		}
		
		body {
			margin: 0px;
			padding: 0px;
			font-family: 'Lato-Thin', sans-serif;
			color: #333;
		}
		
		#header {
			padding: 40px;
			background-color: #333;
			color: #FFF;
		}
		a {
			text-decoration: none;
			color: #666;
		}
		a:hover {
			color: #6cbc35;
		}
		h1.titre {
			text-transform: uppercase;
			font-family: 'Lato-Black', sans-serif;
		}
		h2 {
			
		}
		.ico {
			letter-spacing: 10px;
		}
		.ico a { color: #555; }
		.ico a:hover { color: #FFF; }
		.nb { color: #FFCC2F; }
		table {
			padding: 0px;
			width: 100%;
			border-bottom: 7px solid #333;
		}
		tr:hover {
			background-color: #efe9e5;
		}
		td.titre {
			background-color: #DDD;
			font-family: 'Lato-Bold', sans-serif;
			color: #FFF;
			border-bottom: 7px solid #333;
			font-size: 1.4em;
		}
		td.titre a { color: #FFF; }
		td.titre a:hover { color: #1ca0de; }
		td {
			border-bottom: 1px solid #DDD;
			padding: 5px 10px;
		}
		td.longlat {
			font-size: 0.8em;
		}
		td.name {
			font-family: 'Lato-Bold', sans-serif;
		}
		.gris {
			color: #DDD;
		}
		.legende {
			color: #888;
			font-size: 0.9em;
		}
		
	</style>
       
</head>

<body>
	
	<?PHP
	
	echo '<div id="header">';
	echo '<h1 class="titre">Carte des <span class="nb">#FabLabs</span> & <span class="nb">#TiersLieux</span> de Bretagne</h1>';
	echo '<div class="legende">La liste ci-dessous est issue de la carte collaborative des FabLabs de Bretagne. Toutes deux sont synchronisées en temps réel à partir de la même source, sur Github. Et toutes deux sont libres et Open Source ! N\'hésitez pas à m\'indiquer une modification ou un oubli, et surtout pensez à contribuer :)</div>';
	echo '<h2><span class="nb"><i class="fa fa-map" aria-hidden="true"></i></span> '.$nb_references.' références</h2>';
	echo '<div class="ico"><a href="http://guillaume-rouan.net/blog/2015/10/10/carte-des-fablab-de-bretagne/" target="_blank" title="lisez l\'article complet"><i class="fa fa-pencil-square fa-4x" aria-hidden="true"></i></a> <a href="https://github.com/grouan/bzh_fablab" target="_blank" title="accédez aux sources"><i class="fa fa-github fa-4x" aria-hidden="true"></i></a> <a href="http://twitter.com/grouan" target="_blank" title="contactez-moi !"><i class="fa fa-twitter fa-4x" aria-hidden="true"></i></a> <i class="fa fa-creative-commons fa-4x" aria-hidden="true" style="color:#555;"></i></div>';
	echo '</div>';
	// [ id | name | structure | adresse | cp | ville | web | twitter | facebook | longitude | latitude ]
	echo '<table cellpading="0" cellspacing="0">';
	
		echo '<tr>';
			echo '<td class="titre"><a href="?tri=name" target="_self" title="trier par noms"><i class="fa fa-sort" aria-hidden="true"></i> nom</a></td>';
			echo '<td class="titre" width="70px;"><a href="?tri=structure" target="_self" title="trier par types"><i class="fa fa-sort" aria-hidden="true"></i> type</a></td>';
			echo '<td class="titre">adresse</td>';
			echo '<td class="titre"><a href="?tri=cp" target="_self" title="trier par codes postaux"><i class="fa fa-sort" aria-hidden="true"></i> cp</a></td>';
			echo '<td class="titre"><a href="?tri=ville" target="_self" title="trier par villes"><i class="fa fa-sort" aria-hidden="true"></i> ville</a></td>';
			echo '<td class="titre"><i class="fa fa-globe fa-lg" aria-hidden="true"></i></td>';
			echo '<td class="titre"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></td>';
			echo '<td class="titre"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></td>';
			echo '<td class="titre"><a href="?tri=longitude" target="_self" title="trier par longitudes"><i class="fa fa-sort" aria-hidden="true"></i> LON.</a></td>';
			echo '<td class="titre"><a href="?tri=latitude" target="_self" title="trier par latitudes"><i class="fa fa-sort" aria-hidden="true"></i> LAT.</a></td>';
		echo '</tr>';

	// Affichage
	for ($j=0; $j<count($tab_liste); $j++) {
		echo '<tr>';
			echo '<td class="name">'.$tab_liste[$j]['name'].'</td>';
				if ($tab_liste[$j]['structure'] == 'usages') { 
					$title_structure = 'Espace ou organisation facilitant ou développant les usages numériques'; $img_structure = 'https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_usages.png';
				}
				if ($tab_liste[$j]['structure'] == 'fablabMIT') { 
					$title_structure = 'FabLab affilié à la Fab Foundation du MIT'; $img_structure = 'https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_fablabMIT.png';
				}
				if ($tab_liste[$j]['structure'] == 'cantine') { 
					$title_structure = 'Cantine numérique ou espace de coworking'; $img_structure = 'https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_cantine.png';
				}
				if ($tab_liste[$j]['structure'] == 'hakerspace') { 
					$title_structure = 'Hackerspace'; $img_structure = 'https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_hakerspace.png';
				}
				if ($tab_liste[$j]['structure'] == 'fablab') { 
					$title_structure = 'FabLab (Laboratoire de Fabrication Numérique)'; $img_structure = 'https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_fablab.png';
				}
				if ($tab_liste[$j]['structure'] == 'makerspace') { 
					$title_structure = 'Makerspace'; $img_structure = 'https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_makerspace.png';
				}
				if ($tab_liste[$j]['structure'] == 'tierslieu') { 
					$title_structure = 'Tiers-Lieu'; $img_structure = 'https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_tierslieu.png';
				}
				if ($tab_liste[$j]['structure'] == 'formation') { 
					$title_structure = 'Formation / Recherche'; $img_structure = 'https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_formation.png';
				}
				if ($tab_liste[$j]['structure'] == 'frenchtech') { 
					$title_structure = 'FrenchTech'; $img_structure = 'https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_frenchtech.png';
				}
			echo '<td><img src="'.$img_structure.'" title="'.$title_structure.'" /></td>';
			echo '<td>'.$tab_liste[$j]['adresse'].'</td>';
			echo '<td>'.$tab_liste[$j]['cp'].'</td>';
			echo '<td>'.$tab_liste[$j]['ville'].'</td>';
			echo '<td>';
				if (!empty($tab_liste[$j]['web'])) { echo '<a href="'.$tab_liste[$j]['web'].'" target="_blank" title="&rarr; '.$tab_liste[$j]['web'].'"><i class="fa fa-globe fa-lg" aria-hidden="true"></i></a>'; }
				else { echo '<span class="gris">—</span>'; }
			echo '</td>';
			echo '<td>';
				if (!empty($tab_liste[$j]['twitter'])) { echo '<a href="http://twitter.com/'.$tab_liste[$j]['twitter'].'" target="_blank" title="&rarr; '.$tab_liste[$j]['twitter'].'"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>'; }
				else { echo '<span class="gris">—</span>'; }
			echo '</td>';
			echo '<td>';
				if (!empty($tab_liste[$j]['facebook'])) { echo '<a href="http://facebook.com/'.$tab_liste[$j]['facebook'].'" target="_blank" title="&rarr; '.$tab_liste[$j]['facebook'].'"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>'; }
				else { echo '<span class="gris">—</span>'; }
			echo '</td>';
			echo '<td class="longlat">'.$tab_liste[$j]['longitude'].'</td>';
			echo '<td class="longlat">'.$tab_liste[$j]['latitude'].'</td>';
		echo '</tr>';
	}
	
	echo '</table>';
	
	?>
       
       <iframe width="100%" height="400" src="http://guillaume-rouan.net/blog/fablabzh_map/fablabs_bretagne.php" name="Carte des FabLabs & Tiers-Lieux de Bretagne" style="border:0px;" onmouseover="this.scrollWheelZoom:false;"></iframe>
       
</body>
</html>
