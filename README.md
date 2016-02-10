# Carte OpenSource des FabLabs & autres lieux de dissémination des usages numériques en Bretagne
<img src="http://guillaume-rouan.net/blog/wp-content/uploads/2016/02/fablabzh_map.png" />

Ce projet comprend à la fois le fichier source GeoJSON des lieux géolocalisés + les fichiers de récupération et d'affichage (v.2 PHP). Naturellement ces fichiers peuvent être utilisés indépendamment.

## map_bzh_fablab.geojson
Données <b>GeoJSON</b> des FabLab, MakerSpace, HackerSpace, TiersLieu, Asso Usages numériques (...) de Bretagne.
Les EPN (Espaces Publics Numériques) ne sont pas pris en compte. Ce fichier peut être utilisé notamment dans le cadre de l'élaboration d'une cartographie OpenStreetMap de ces lieux.

## v.2 : fablabs_bretagne.php
+ Carte dynamique plein écran, qui récupère les sources du fichier <code>map_bzh_fablab.geojson</code> et affiche automatiquement les marqueurs sur la map.

+ Mêmes paramétrages que pour la v.1, et toujours fonctionnel sous CMS.

+ Package <code>img</code> comprenant les images PNG (24px/24px) des différents marqueurs.

## v.1 : fablabs_bretagne.html
Carte HTML en plein écran, pour intégration au sein de votre CMS en iframe (fonctionnel pour Wordpress). Cette carte comprend les librairies importées, ainsi que les paramétrages de la carte et l'affichage.
Mes paramètres de compte perso Mapbox sont à modifier avant intégration :
- <code>ACCESS_TOKEN = 'XXX';</code> : remplacer XXX par l'Access Token de votre compte <a href="http://www.mapbox.com/" target="_blank">Mapbox</a>,
- <code>L.tileLayer(MB_URL, {attribution: MB_ATTR, id: 'YYY' }).addTo(map);</code> : remplacer YYY par l'identifiant du fond de carte Mapbox que vous souhaitez utiliser.

## Démo
- Map plein écran : <a href="http://guillaume-rouan.net/blog/fablabzh_map/fablabs_bretagne.php" target="_blank">http://guillaume-rouan.net/blog/fablabzh_map/fablabs_bretagne.php</a>
- Intégration Wordpress : <a href="http://guillaume-rouan.net/blog/2015/10/10/carte-des-fablab-de-bretagne/" target="_blank">http://guillaume-rouan.net/blog/2015/10/10/carte-des-fablab-de-bretagne/</a>

## Développements
- Cluster : en fonction du zoom, regrouper les marqueurs pour plus de lisibilité
- Sidebar : en plein écran, ajout d'une sidebar avec éléments de légende

## Licence & crédits
Ces fichiers sont accessibles en <b>Open Data</b> sous Licence <a href="http://creativecommons.org/licenses/by/4.0/" target="_blank">CC BY</a>.

Sources : &copy; Contributeurs de <a href="http://openstreetmap.org" target="_blank">OpenStreetMap</a> pour les données cartographiques de base + <a href="http://www.mapbox.com" target="_blank">Mapbox</a> pour le fond de carte + <a href="http://leafletjs.com/" target="_blank">Leaflet</a> pour rendre le tout interactif + <a href="http://arsenicpaca.fr/iconotheque-mediation-numerique/" target="_blank">ARSENIC</a> et <a href="http://www.fabfoundation.org" target="_blank">Fab Foundation</a> pour les images des icones.

## + d'informations
Pour toute information, contactez-moi &rarr; <a href="http://guillaume-rouan.net" target="_blank">http://guillaume-rouan.net</a> | <a href="http://twitter.com/grouan" target="_blank">@grouan</a>
