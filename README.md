# Bienvenue sur #MapLabBZH<br />la Carte des FabLabs & Tiers-Lieux de Bretagne
<img src="https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/wiki/maplabbzh_logo_250x226.png" alt="Carte des FabLabs & Tiers-Lieux de Bretagne — Guillaume Rouan — #MapLabBZH" />

Ce projet, initié en 2015, est né d'une initiative ouverte visant à formaliser une documentation inexistante jusqu’à lors et à améliorer la visibilité des espaces / services / projets qui œuvrent d’une même dynamique sur le territoire breton. **Elle recense les FabLabs, Tiers-Lieux & autres lieux de dissémination des usages numériques en Bretagne.** Collaborative, libre et Open Source, cette carte est aujourd'hui en perpétuelle amélioration et pleinement accessible, sur la base  du crowdsourcing. Ainsi, vous pouvez librement y contribuer, l’utiliser, l’intégrer à vos sites web, la modifier, l’adapter, la remixer…

> Pour tout savoir sur ce projet, consultez [le wiki](https://github.com/grouan/bzh_fablab/wiki) 🚀<br /> 
> Pour visualisez ou télécharger les sources, consultez [le dépôt bzh_fablab](https://github.com/grouan/bzh_fablab) 📥 

<hr />

Utilisez le hashtag **#MapLabBZH** pour en parler 💬

<img src="https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/wiki/cc-by.png" /> <a href="http://bit.ly/DataGouvFabLabs" target="_blank"><img src="https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/wiki/datagouv_logo.png" alt="DataGouv : Carte des FabLabs & Tiers-Lieux de Bretagne" /></a> <a href="http://bit.ly/GeoBretagneFabLabs" target="_blank"><img src="https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/wiki/geobretagne_logo.png" alt="GéoBretagne : Carte des FabLabs & Tiers-Lieux de Bretagne" /></a> <a href="http://bit.ly/MapLabsBZH_RFF" target="_blank"><img src="https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/wiki/reseauff_logo.png" alt="Réseau Français des FabLabs : Carte des FabLabs & Tiers-Lieux de Bretagne" /></a> 

<hr />

## // CONTRIBUEZ !

Votre contribution est essentielle à la mise-à-jour de cette carte ainsi qu'à sa qualité et à sa pérennité. Pour contribuer, rien de plus simple : il vous suffit de cliquer sur le bouton "Je souhaite contribuer" pour afficher le formulaire et indiquer les éléments que vous souhaitez modifier ou ajouter à la carte.

<button onclick="var x = document.getElementById('formulaire');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }"><img src="http://guillaume-rouan.net/blog/wp-content/uploads/2017/07/square-add-icon.png" style="width:12px;height:12px;margin-right:12px;" />Je souhaite contribuer</button>
<div id="formulaire" style="display:none;">
<!-- -->
<form action="http://guillaume-rouan.net/contact_bzh_fablab.php" method="post" style="background-color:#EAEAEA;border-radius:5px;padding:12px;">
  <fieldset style="border:5px solid #333">
    <legend style="font-weight:bold;color:#FFF;background-color:#333;padding:2px 10px;">QUI SUIS-JE</legend>
    <label for="CONTACT-name">Nom / Prénom : </label> <input id="CONTACT-name" type="text" name="contact_nom" /><br />
    <label for="CONTACT-mail">E-mail : </label> <input id="CONTACT-mail" type="text" name="contact_mail" /><br />
    <label for="CONTACT-statut">Statut : </label> <input id="CONTACT-statut" type="text" name="contact_statut" /><br />
    <label for="CONTACT-message">Message : </label><br />
    <textarea id="ECONTACT-message" name="contact_message" row="3" cols=""></textarea>
  </fieldset>
  <fieldset style="border:5px solid #333;margin-top:20px;">
    <legend style="font-weight:bold;color:#FFF;background-color:#333;padding:2px 10px;">CE QUE JE PROPOSE D'AJOUTER À LA CARTE</legend>
    <fieldset style="border-color:#FFF;">
        <legend style="font-weight:bold;color:#FFF;padding:2px 10px;">STRUCTURE / SERVICE / PROJET</legend>
        <label for="ETB-name">Nom : </label> <input id="ETB-name" type="text" name="_nom" /><br />
        <label for="ETB-orga">Organisme : </label> <input id="ETB-orga" type="text" name="_organisme" /><br />
        <label for="ETB-type">Type : </label><br /> 
            <input type="radio" name="_type" id="radio1" value="Cantine numérique" /> <img src="https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_cantine.png" style="width:25px;height:25px;" /> <label for="radio1">Cantine numérique ou espace de coworking</label><br />
            <input type="radio" name="_type" id="radio3" value="FabLab MIT" /> <img src="https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_fablabMIT.png" style="width:25px;height:25px;" /> <label for="radio3">FabLab labellisé MIT</label><br />
            <input type="radio" name="_type" id="radio4" value="FabLab" /> <img src="https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_fablab.png" style="width:25px;height:25px;" /> <label for="radio4">Atelier de fabrication</label><br />
            <input type="radio" name="_type" id="radio5" value="Formation / Recherche" /> <img src="https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_formation.png" style="width:25px;height:25px;" /> <label for="radio5">Formation / Recherche</label><br />
            <input type="radio" name="_type" id="radio6" value="FrenchTech" /> <img src="https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_frenchtech.png" style="width:25px;height:25px;" /> <label for="radio6">FrenchTech</label><br />
            <input type="radio" name="_type" id="radio7" value="Hackerspace" /> <img src="https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_hakerspace.png" style="width:25px;height:25px;" /> <label for="radio7">Hackerspace</label><br />
            <input type="radio" name="_type" id="radio8" value="Makerspace" /> <img src="https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_makerspace.png" style="width:25px;height:25px;" /> <label for="radio8">Makerspace</label><br />
            <input type="radio" name="_type" id="radio9" value="Tiers-Lieu" /> <img src="https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_tierslieu.png" style="width:25px;height:25px;" /> <label for="radio9">Tiers-Lieu</label><br />
            <input type="radio" name="_type" id="radio10" value="Espace / Organisation facilitant les usages numériques" /> <img src="https://raw.githubusercontent.com/grouan/bzh_fablab/master/img/osm_marker_usages.png" style="width:25px;height:25px;" /> <label for="radio10">Espace / Organisation facilitant les usages numériques</label><br />
    </fieldset>
    <fieldset style="border-color:#FFF;">
        <legend style="font-weight:bold;color:#FFF;padding:2px 10px;">COORDONNÉES</legend>
    <label for="ETB-adr">Adresse : </label> <input id="ETB-adr" type="text" name="_adresse" /><br /> 
    <label for="ETB-cp">CP : </label> <input id="ETB-cp" type="text" name="_cp" size="6" /> 
    <label for="ETB-ville">Ville : </label> <input id="ETB-ville" type="text" name="_ville" /><br />
    <label for="ETB-web">Site web : </label> <input id="ETB-web" type="text" name="_web" /><br />
    <label for="ETB-fb">Page Facebook : </label> <input id="ETB-fb" type="text" name="_facebook" /><br />
    <label for="ETB-tw">Profil Twitter : </label> <input id="ETB-tw" type="text" name="_twitter" /><br />
    <label for="ETB-mail">E-mail de contact : </label> <input id="ETB-mail" type="text" name="_mail" x-moz-errormessage="Merci d'indiquer une adresse mail valide :)" /><br />
    </fieldset>
    <fieldset style="border-color:#FFF;">
        <legend style="font-weight:bold;color:#FFF;padding:2px 10px;">GÉOLOCALISATION GPS</legend>
        <label for="ETB-GPSlat">Latitude : </label> <input id="ETB-GPSlat" type="text" name="_GPSlat" /><br />
        <label for="ETB-GPSlon">Longitude : </label> <input id="ETB-GPSlon" type="text" name="_GPSlon" /><br />
    </fieldset>
    </fieldset>
    <div style="text-align:right;font-size:0.7em;color:#FFF;">Les informations de la rubrique "Qui suis-je" mentionnées dans le présent formulaire servent uniquement à usage de communication. Elle ne seront pas stockées en base de données, ni cédées ou vendues à aucun tiers.</div>
  <input type="submit" value="&rarr; JE CONTRIBUE" style="margin-top:20px;border:0px;font-weight:bold;color:#FFF;background-color:#333;padding:2px 10px;" />
</form>
<!-- -->
</div>
