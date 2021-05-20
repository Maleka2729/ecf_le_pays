# Le Pays - Cahier des charges

## Contexte et objectif du site
Le client possède une entreprise de nouvelle, et souhaite moderniser son journal local « Le Pays ». Pour cela, il souhaite créer un site internet simple d’utilisation, qui puisse diffuser les informations de son format papier, tout en gardant le confort de lecture que peut fournir ce dernier. Son journal local a pour réputation de diffuser les informations sur les activités sportives, et culturelles du pays.
* Pour la création de son site internet, le client souhaite :
    * Avoir un accès rapide pour les futurs évènements sur les pages du site,
    * Pourvoir naviguer entre les différents articles, grâce aux catégories ou via des tags,
    * Souhaite garder sa principale fonctionnalité, celui de présenter les informations dans l'ordre chronologique. C'est-à-dire prioriser la une des informations du jour,
    * Souhaite également que son site soit responsif, pour être visible par un public plus jeune et avec ceux qui sont familiarisés avec la technologie.

## Realisation du site
Pour répondre à la demande du client, plusieurs tâches doivent être réaliser :
* Dans un premier temps, le site devra contenir 4 pages :
    * Une page « A la Une ! », qui contiendra les articles du jour ajoutées récemment, 
    * Une partie événement sera sur la page « A la Une ! » afin de tenir informer les lecteurs événements à venir,
    * Une page « Activités culturelles », qui contiendra tous les évènements culturels locaux,
    * Une page « Activités sportives », qui contiendra tous les évènements sportives du pays.
* La taxonomie permettra de naviguer facilement entre les différentes catégories et les différents tags, pour cela : 
    * Création des catégories pour le site : « Activités culturelles » et « Activités sportives »
    * Création des tags pour les catégories culturelles et sportives : « rugby », « football », « fête locale » et « exposition »
* Le site doit être sécuriser de manière a éviter que des personnes malveillantes injectent du code pour casser le site. Pour cela nous avons : 
    * Supprimés le compte admin par défaut sur WordPress, 
    * Changés le nom de nos tables, 
    * Ajoutés un plugin « WP Hide Secure »,
* Pour les articles, il faudra créer de faux articles pour avoir du contenu pour le site, 
* Le site doit être responsif, pour être accessible à un plus large public. 

## Maquettage et Charte Graphique 
* Pour la réalisation de la maquette du site, nous avons utilisés l’outil « Figma ».
* La maquette est composé de quatre pages : 
    * Une page « A la Une ! », qui affiche les articles du jour, 
    * Une page « Vos activités culturelles », qui affiche tous les articles de la catégorie culturelle, 
    * Une page « Vos activités sportives », qui affiche tous les articles de la catégorie sportive, 
    * Une page qui  affiche un seul article. Il s’agit de la page utilisé, lorsque qu’un lecteur veut lire tout l’article.
* En ce qui concerne la disposition de nos bloc, de nos articles, et de nos menu (footer et header), nous nous sommes inspirés de deux site d’informations (BFM TV et LCI). 
* Pour nos menus (footer et header), nous avons réutiliser le logo du journal,
* Le site doit être facile de navigation, et doit faciliter la lecture des articles auprès des lecteurs (contraste des couleurs, taille de la police et choix de la police). 
* Pour ce qui est de la police, nous avons utilisé deux police : 
    * Une police pour les différents titres, qui est « PT Sans Narrow »,
    * Une police pour le contenu de l’article qui est « Serif sans ».

## Navigation Site WordPress 
Le menu du site est compose de trois pages : 
* Une page « A la Une ! », qui affiche les derniers articles du jour, que sa soit pour la catégorie culturelle ou pour la catégorie sportive. Une partie événement est également sur cette page (événement sportive ou évènement culturelle) 
* Une page « Vos activités culturelles » qui affiche tous les articles de la catégorie culturelle l, 
* Une page « Vos activités sportives » qui affiche tous les articles de la catégorie sportive. 

Les articles sur le site ont étés reprit sur les sites que nous avons utilisés pour réaliser nos maquettes et la charges graphiques. 

Pour la réalisation du site nous avons utilisés bootstrap, HTML et CSS. 

## Contraintes Techniques
* Le site doit être déployé sur un serveur Web.
