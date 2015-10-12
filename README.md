# bzh_fablab

## map_bzh_fablab.geojson
Données <b>GeoJSON</b> des FabLab, MakerSpace, HackerSpace, TiersLieu, Asso Usages numériques (...) de Bretagne.
Les EPN (Espaces Publics Numériques) ne sont pas pris en compte. Ce fichier peut être utilisé notamment dans le cadre de l'élaboration d'une cartographie OpenStreetMap de ces lieux.

## fablabs_bretagne.html
Carte HTML en plein écran, pour intégration sur CMS en iframe (fonctionnel sous Wordpress). Cette carte comprend les librairies importées, ainsi que les paramétrages de la carte et l'affichage.
Mes paramètres de compte perso Mapbox sont à modifier avant intégration :
- <code>ACCESS_TOKEN = 'XXX';</code> : remplacer XXX par l'Access Token de votre compte <a href="http://www.mapbox.com/" target="_blank">Mapbox</a>,
- <code>L.tileLayer(MB_URL, {attribution: MB_ATTR, id: 'YYY' }).addTo(map);</code> : remplacer YYY par l'identifiant du fond de carte Mapbox que vous souhaitez utiliser.

## Licence d'utilisation
Ces datas sont accessibles en <b>Open Data</b> sous Licence <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/fr/" target="_blank">CC BY-NC-SA</a>.

## + d'informations
Pour toute information, contactez-moi => <a href="http://guillaume-rouan.net" target="_blank">http://guillaume-rouan.net</a> | <a href="http://twitter.com/grouan" target="_blank">@grouan</a>
