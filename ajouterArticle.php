<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
<title>Rechercher un article</title>
    <link rel="stylesheet" href="./CSS/normalize.css"/>
	<link rel="stylesheet" href="./css/style.css"/>
    <link rel="stylesheet" href="css/core.css"> 
</head>		
<body>  

<div id="container">

	<p>Ajouter un article</p>

    <div id="formulaire">

    <form method="post" action="./index.php?page=traitementAjouter.php">

    <div class=""><input name="titre" type="text" placeholder="titre" size=40 /></div>

    <div class=""><input name="page" type="text" placeholder="page" size=40 /></div>

    <div class=""><input name="date" type="text" placeholder="date" size=40 /></div>
    
    <div class="form">Publication:<select name="publication" size="1">
    <option style="color:red">- Bulletin Communal
    <option style="color:blue"> - Actualités
    <option>6 bears.com
    <option>7 Dimanche
    <option>A+ Architecture
    <option>A+ Architectuur
    <option>Actu24.be
    <option>Agenda
    <option>Alter Echos
    <option>Annales pharmaceutiques belges
    <option>Architectenkrant
    <option>archiurbain.be
    <option>armenews.be
    <option>Ars Toeristica
    <option>Arte News
    <option>Axelle
    <option>Badje
    <option>Belga
    <option>Bibliotheekblad
    <option>Bouwkroniek
    <option>Bru+
    <option>Brussel Deze Week
    <option>Brusselnieuws.be
    <option>Bruxelles en mouvement
    <option>Bruxelles News
    <option>Capitale
    <option>Capitale.be
    <option>Champs de vision
    <option>Ciné Télé Revue
    <option>cinetelerevue.be
    <option>Citizen (FR)
    <option>Citizen (NL)
    <option>Close up News (FR)
    <option>Close up News (NL)
    <option>Collect
    <option>Commission en direct
    <option>Courrier International
    <option>Dag Allemaal
    <option>De Morgen
    <option>De Schakel (Ten Noey)
    <option>De Stabdaard
    <option>De Tijd
    <option>De Volkskrant
    <option>De Zondag
    <option>demorgen.be
    <option>deredactie.be
    <option>Deuzio
    <option>DH
    <option>dhnet.be
    <option>Dimanche Express
    <option>Elle Belgique
    <option>Equilibre
    <option>Espaces de Libertés
    <option>Femmes d'Aujourd'hui
    <option>Flair
    <option>Foot magazine
    <option>Forward
    <option>Gazet van Antwerpen
    <option>Genieten
    <option>Gentelman
    <option>Global post
    <option>Grande
    <option>Grande
    <option>GrenzEcho
    <option>guidesocial.be
    <option>Het bedrijf
    <option>Het Belang van Limburg
    <option>Het Laatse Nieuws
    <option>Het Nieuwsblad
    <option>Het Parool
    <option>Hln.be
    <option>Humo
    <option>Ik ga Bouwen
    <option>Images maagazine
    <option>Imagine
    <option>Immo
    <option>Indymedia.be
    <option>Je vais Construire
    <option>Journal de l'Architecte
    <option>Journal des enfants (JDE)
    <option>Juliette&Victor
    <option>Kerk en Leven
    <option>Knack
    <option>Knack.be
    <option>Krant van West-Vlaanderen
    <option>L'Art Même 
    <option>L'Avenir
    <option>L'évantail
    <option>L'Echo
    <option>L'Evenement
    <option>L'Usine entreprise
    <option>La Chronique
    <option>La Gauche
    <option>La Libre
    <option>La Libre Essentielle
    <option>La Meuse
    <option>La Nouvelle Gazette
    <option>La Province
    <option>La Revue Nouvelle
    <option>lalibre.be
    <option>Lameuse.be
    <option>Le Généraliste
    <option>Le Jeudi
    <option>Le Journal du Médecin
    <option>Le Ligueur
    <option>Le Monde de l'Assurance
    <option>Le Monde diplomatique
    <option>Le Monde.fr
    <option>Le Soir
    <option>Le Soir Mag
    <option>Le Vif L'Express
    <option>Le Vif.be
    <option>lecho.be
    <option>Les carnets et les instants
    <option>lesoir.be
    <option>Libération
    <option>Liberté (Algérie)
    <option>MAD (Le Soir)
    <option>Marie-Claire
    <option>Métro (FR)
    <option>Métro (NL)
    <option>MM News
    <option>MoneyTalk
    <option>Moustique
    <option>Netto
    <option>nieuwsblad.be
    <option>Nord Eclair
    <option>Nouvelle Gazette
    <option>Ons Recht
    <option>Pan
    <option>Paris Match
    <option>Pasar
    <option>Passe-Partout
    <option>Père UBU
    <option>PGV
    <option>Presse internationale
    <option>Prevent Focus (FR)
    <option>Prevent Focus (NL)
    <option>Prométhéa
    <option>PUB
    <option>radio1.be
    <option>Références
    <option>Regards
    <option>Retail Update Magazine (FR)
    <option>Retail Update Magazine (NL)
    <option>reves-handic-action.be
    <option>Revolve
    <option>Royals
    <option>rtbf.be
    <option>rtlinfo.be
    <option>Septentrion
    <option>skynet.be
    <option>SLRB
    <option>standaard.be
    <option>Sud Presse Sports
    <option>Sudpresse.be
    <option>Télémoustique
    <option>Télépro
    <option>telebruxelles.be
    <option>Test-Aankoop
    <option>Test-Achats
    <option>The Bulletin
    <option>The Word
    <option>Trends - Tendances
    <option>Tribune de Bxl
    <option>Trouw
    <option>tvbrussel.be
    <option>Ubu Resto
    <option>Vers l'Avenir
    <option>Victoire
    <option>Vlan
    <option>Zone02
    </select> </div>
    
    <div class="form">langue:<select name="langue" size="1">
    <option>FR
    <option>NL
    </select> </div>
    
    <div class=""><input name="tag" type="text" placeholder="tag" size=40 /></div>
    
    <div class=""><input name="image" type="text" placeholder="image" size=40 /></div>

    <input name="Photo" type="file" size="50" /><br>

    <input type="submit" color="#47566D"value="Ajouter" />

    <input type="reset" value="Supprimer"/>

    </form>

</div>

</div>

</body>
</html>
