# Carte des FabLabs de Bretagne
#### CARTE COLLABORATIVE & OPEN SOURCE DES FABLABS ET AUTRES LIEUX DE DISSÉMINATION DES USAGES NUMÉRIQUES EN BRETAGNE
<img src="http://guillaume-rouan.net/blog/wp-content/uploads/2016/02/fablabzh_map.png" />

Ce projet, initié en 2014, est à l'origine une initiative personnelle visant à formaliser une documentation inexistante jusqu'à lors et à améliorer la visibilité des espaces / services / projets qui œuvrent d'une même dynamique sur le territoire breton. Collaboratif, libre et Open Source, cette carte est désormais pleinement ouverte. Ainsi, vous pouvez librement y contribuer, l'utiliser, l'intégrer à vos sites web, la modifier, l'adapter, la remixer&hellip;

Cette carte est également disponible sur les plateformes suivantes :

<a href="http://bit.ly/DataGouvFabLabs" target="_blank"><img src="http://guillaume-rouan.net/blog/wp-content/uploads/2016/03/datagouv_logo.png" alt="Dépot Open Data sur le site DataGouv" title="Accédez au dépôt sur le site DataGouv" style="border-radius:5px;margin-right:20px;border:1px solid #DDD;" /></a> <a href="http://bit.ly/GeoBretagneFabLabs" target="_blank"><img src="http://guillaume-rouan.net/blog/wp-content/uploads/2016/03/geobretagne_logo.png" alt="Carte sur le site GéoBretagne de la Région Bretagne" title="Accédez à la carte sur GéoBretagne" style="border-radius:5px;" /></a>

## // CONTRIBUEZ !

Contactez-moi contact[at]guillaume-rouan[dot]net en précisant les informations suivantes : nom + type (Cantine numérique / coworking space, FabLab MIT, FabLab, Formation / Recherche, FrenchTech, Hackerspace, Makerspace, Tiers-Lieu, Espace / Organisation facilitant les usages numériques) + adresse (avec CP et Ville) + Site web + Page Facebook + Profil Twitter + Coordonnées GPS (Lat. et Long. précises).

<FORM action="mailto:contact@guillaume-rouan.net?subject=contribution_carte_fablabs_bretagne" method="post">
<div>
        <label for="name">Nom</label>
        <input type="text" id="name" name="nom">
    </div>
    <div>
        <label for="mail">Courriel</label>
        <input type="email" id="mail" name="courriel">
    </div>
    <div>
        <label for="msg">Message</label>
        <textarea id="msg" name="message"></textarea>
    </div>
<input type="submit" value="Envoyer">
</FORM>

## // LE CODE

### fablabs_bzh_liste.php
Vous pouvez accéder à l'ensemble de ces références sous forme de liste. L'affichage vous permet ainsi de <b>trier</b> les différents éléments (par noms, par ville, par type...). Les sources sont les mêmes que pour la carte, ce qui garanti une mise à jour en temps réel !

### map_bzh_fablab.geojson
Données <b>GeoJSON</b> des FabLab, MakerSpace, HackerSpace, TiersLieu, Asso Usages numériques (...) de Bretagne.
Les EPN (Espaces Publics Numériques) ne sont pas pris en compte. Ce fichier peut être utilisé notamment dans le cadre de l'élaboration d'une cartographie OpenStreetMap de ces lieux.

## // ENCAPSULATION (Embed Code)

Pour intégrer cette carte à votre site web, copiez-collez ce code directement dans votre page : 
```html
<iframe width="800" height="600" src="http://guillaume-rouan.net/blog/fablabzh_map/fablabs_bretagne.php" name="Carte des FabLabs & Tiers-Lieux de Bretagne" style="border:0px;"></iframe>
```

Si vous êtes sur un CMS (Wordpress, Joomla, Drupal...), pensez à bien vous placer en mode HTML lors de l'ajout de ce code au sein de votre article, et non en mode visuel (ou aperçu). L'affichage optimal est de 800 x 600 pixels, ce qui vous permet de voir l'ensemble de la zone. Vous pouvez néanmoins paramétrer à votre goût : <code>width="100%"</code> pour un affichage en pleine largeur, complétez l'argument <code>style=""</code> pour modifier le rendu visuel (CSS)&hellip;

## // DÉMO

- Map plein écran : <a href="http://guillaume-rouan.net/blog/fablabzh_map/fablabs_bretagne.php" target="_blank">http://guillaume-rouan.net/blog/fablabzh_map/fablabs_bretagne.php</a>
- Intégration Wordpress : <a href="http://guillaume-rouan.net/blog/2015/10/10/carte-des-fablab-de-bretagne/" target="_blank">http://guillaume-rouan.net/blog/2015/10/10/carte-des-fablab-de-bretagne/</a>
- Liste des Fab Labs : <a href="http://guillaume-rouan.net/blog/fablabzh_map/fablabs_bzh_liste.php" target="_blank">http://guillaume-rouan.net/blog/fablabzh_map/fablabs_bzh_liste.php</a>

## // OUTILS UTILISÉS

Sources : &copy; Contributeurs de <a href="http://openstreetmap.org" target="_blank">OpenStreetMap</a> pour les données cartographiques de base + <a href="http://www.mapbox.com" target="_blank">Mapbox</a> pour le fond de carte + <a href="http://leafletjs.com/" target="_blank">Leaflet</a> pour rendre le tout interactif + <a href="http://arsenicpaca.fr/iconotheque-mediation-numerique/" target="_blank">ARSENIC</a> et <a href="http://www.fabfoundation.org" target="_blank">Fab Foundation</a> pour les images des icones.

## // LICENCE

Ces fichiers sont accessibles en <b>Open Data</b> sous Licence <a href="http://creativecommons.org/licenses/by/4.0/" target="_blank">CC BY</a>.<br />
Merci de faire mention d'auteur pour toute utilisation.<br />
Permalien du projet : <a href="http://grouan.github.io/bzh_fablab/" target="_blank">http://grouan.github.io/bzh_fablab/</a>

## // AUTEUR

**Guillaume ROUAN**<br />
<a href="http://guillaume-rouan.net/blog/" target="_blank">guillaume-rouan.net/blog/</a><br />
<a href="http://twitter.com/grouan" target="_blank">@grouan</a>

## // VERSIONS

### v.4 : Optimisations pour les Pages Github.io

### v.3 : fablabs_bretagne.php
+ Lien direct : le fichier <code>fablabs_bretagne.php</code> récupère automatiquement les sources et les images depuis le dépôt Github

+ Package <code>img</code> comprenant les images PNG des différents marqueurs et icones des réseaux sociaux.

+ Mêmes paramétrages que pour la v.1, et toujours fonctionnel sous CMS.

### v.2 : fablabs_bretagne.php
+ Carte dynamique plein écran, qui récupère les sources du fichier <code>map_bzh_fablab.geojson</code> et affiche automatiquement les marqueurs sur la map.

+ Mêmes paramétrages que pour la v.1, et toujours fonctionnel sous CMS.

### v.1 : fablabs_bretagne.html
Carte HTML en plein écran, pour intégration au sein de votre CMS en iframe (fonctionnel pour Wordpress). Cette carte comprend les librairies importées, ainsi que les paramétrages de la carte et l'affichage.
Mes paramètres de compte perso Mapbox sont à modifier avant intégration :
- <code>ACCESS_TOKEN = 'XXX';</code> : remplacer XXX par l'Access Token de votre compte <a href="http://www.mapbox.com/" target="_blank">Mapbox</a>,
- <code>L.tileLayer(MB_URL, {attribution: MB_ATTR, id: 'YYY' }).addTo(map);</code> : remplacer YYY par l'identifiant du fond de carte Mapbox que vous souhaitez utiliser.
