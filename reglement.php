<?php require('config.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?php echo $RulesTitleSite ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="og:title" content="<?php echo $RulesTitleSite ?>">
    <meta name="description" content="<?php echo $MetaDescription ?>">
    <meta name="og:description" content="<?php echo $MetaDescription ?>">
    <meta name="keywords" content="<?php echo $MetaDescription ?>">
    <meta name="theme-color" content="#ee282e">
    <meta name="og:type" content="game">
    <meta name="og:url" content="<?php echo $urlsite ?>">
    <meta name="url" content="<?php echo $urlsite ?>">
    <meta name="identifier-URL" content="<?php echo $urlsite ?>">
    <meta name="revisit-after" content="2 days">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="robots" content="index,follow">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="/assets/nevalogo1.ico" type="image/x-icon" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/frontend-opt.js" type="text/javascript"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a id="goto-home" class="nav-link" href="<?php echo $urlsite ?>"><?php echo $home ?></a>
                    </li>
                    <li class="nav-item">
                        <a id="goto-servers" class="nav-link" href="<?php echo $urldiscord ?>" target="_blank"><?php echo $Tdiscord ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $urlshop ?>" target="_blank"><?php echo $Tshop ?> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $rules ?>"><?php echo $Trules ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </div>
    <div id="fixed-container">
        <section id="reglement">
            <div id="reglement-content">
                <div class="accueil-content">
                    <img src="img/reglement/accueilreglement.jpg" alt="">
                    <div class="paraaccueilreglement"></div>
                </div>
                <div class="main-dropdown-container">
                    <div class="main-dropdown">
                        <div id="accueil-reglement">
                            <a href="<?php echo $urlsite ?>">
                                <button class="main-dropbtn"><?php echo $RulesCatzero ?> <span class="width=" 24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" stroke="white" stroke-width="2" d="M9 6l6 6-6 6" /></svg>
                                    </span></button>
                            </a>
                        </div>
                    </div>
                </div>
                <hr class="separator">
                <h3 class="section-title"><?php echo $Trules ?> <?php echo $SiteName ?>
                    </head>
                </h3>
                <div class="main-dropdown">
                    <button class="main-dropbtn"><?php echo $RulesCatOne ?> <span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" stroke="white" stroke-width="2" d="M9 6l6 6-6 6" />
                            </svg></span></button>
                    <div class="main-dropdown-content">
                        <a href="#discord"><?php echo $RulesSubTitleCatone ?></a>
                    </div>
                </div>
            </div>
            <div class="main-dropdown-container">
                <div class="main-dropdown">
                    <button class="main-dropbtn"><?php echo $RulesCatTwo ?><span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" stroke="white" stroke-width="2" d="M9 6l6 6-6 6" />
                            </svg></span></button>
                    <div class="main-dropdown-content">
                        <a href="#reglementhrp"><?php echo $RulesSubTitleCattwoeone ?></a>
                        <a href="#ticketreport"><?php echo $RulesSubTitleCattwotwo ?></a>
                        <a href="#sanction"><?php echo $RulesSubTitleCattwotree ?></a>
                        <a href="#reglementrp"><?php echo $RulesSubTitleCattwofour ?></a>
                        <a href="#regleasavoir"><?php echo $RulesSubTitleCattwofive ?></a>
                        <a href="#zonessafes"><?php echo $RulesSubTitleCattwosix ?></a>
                        <a href="#packgraphique"><?php echo $RulesSubTitleCattwoseven ?></a>
                    </div>
                </div>
            </div>
            <div class="main-dropdown-container extra-space">
                <div class="main-dropdown">
                    <button class="main-dropbtn"><?php echo $RulesCatTree ?> <span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" stroke="white" stroke-width="2" d="M9 6l6 6-6 6" />
                            </svg></span></button>
                    <div class="main-dropdown-content">
                        <a href="#masque"><?php echo $RulesSubTitleCattreeone ?></a>
                        <a href="#groupegangorganisation"><?php echo $RulesSubTitleCattreetwo ?></a>
                        <a href="#systeme-paliers"><?php echo $RulesSubTitleCattreetree ?></a>
                        <a href="#progression-paliers"><?php echo $RulesSubTitleCattreefour ?></a>
                        <a href="#voldevehicule"><?php echo $RulesSubTitleCattreefive ?></a>
                        <a href="#alliance"><?php echo $RulesSubTitleCattreesix ?></a>
                        <a href="#trafic"><?php echo $RulesSubTitleCattreeseven ?></a>
                        <a href="#tir"><?php echo $RulesSubTitleCattreeheight ?> </a>
                        <a href="#loot"><?php echo $RulesSubTitleCattreenine ?></a>
                        <a href="#labodedrogue"><?php echo $RulesSubTitleCattreeten ?></a>
                        <a href="#prisedotage"><?php echo $RulesSubTitleCattreeeleven ?></a>
                        <a href="#mortrp"><?php echo $RulesSubTitleCattreetwlv ?></a>
                        <a href="#gunfight"><?php echo $RulesSubTitleCattreetrt ?></a>
                        <a href="#vehicule"><?php echo $RulesSubTitleCattreefout ?></a>
                        <a href="#attaqueQG"><?php echo $RulesSubTitleCattreefivt ?></a>
                    </div>
                </div>
            </div>
            <div class="main-dropdown-container">
                <div class="main-dropdown">
                    <button class="main-dropbtn"><?php echo $RulesCatFour ?> <span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" stroke="white" stroke-width="2" d="M9 6l6 6-6 6" />
                            </svg></span></button>
                    <div class="main-dropdown-content">
                        <a href="#reglement-entreprises"><?php echo $RulesSubTitleCatfourone ?></a>
                        <a href="#concessionnaire"><?php echo $RulesSubTitleCatfourtwo ?></a>
                        <a href="#mecano"><?php echo $RulesSubTitleCatfourtree ?></a>
                        <a href="#lspdbcso"><?php echo $RulesSubTitleCatfourfour ?></a>
                        <a href="#hierarchielspd"><?php echo $RulesSubTitleCatfourfive ?></a>
                        <a href="#hierarchiebcso"><?php echo $RulesSubTitleCatfoursix ?></a>
                        <a href="#defcon"><?php echo $RulesSubTitleCatfourseven ?></a>
                        <a href="#reglement-ems"><?php echo $RulesSubTitleCatfourheight ?></a>
                        <a href="#autre"><?php echo $RulesSubTitleCatfournine ?></a>
                    </div>
                </div>
            </div>
            <h3 class="section-title"><?php echo $Twiki ?></h3>
            <div class="main-dropdown-container">
                <div class="main-dropdown">
                    <button class="main-dropbtn"><?php echo $WCatshop ?> <span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" stroke="white" stroke-width="2" d="M9 6l6 6-6 6" />
                            </svg></span></button>
                    <div class="main-dropdown-content">
                        <a href="#coins"><?php echo $WCatSubshop ?></a>
                    </div>
                </div>
            </div>
            <div class="main-dropdown-container">
                <div class="main-dropdown">
                    <button class="main-dropbtn"><?php echo $WCatBugs ?> <span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" stroke="white" stroke-width="2" d="M9 6l6 6-6 6" />
                            </svg></span></button>
                    <div class="main-dropdown-content">
                        <a href="#signalez-un-bug"><?php echo $WCatSubBugs ?></a>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </section>
    </div>
    <div class="annonces-nouvelles">
        <h2><?php echo $LeftNew ?></h2>
        <div class="annonce">
            <h4><?php echo $TPatch ?> </h4>
            <p><?php echo $TPatch ?> - <?php echo $DateLastUpdate ?>
                <br>
                <?php echo $UpdatesRules ?>
            </p>
        </div>
        <div class="annonce">
            <h4>Staff</h4>
            <p><?php echo $Founder ?> <br>
                <span style="color: #007a85;"><?php echo $Dev ?><br>
                    <span style="color: #ff922b;"><?php echo $Admin ?></span><br>
                    <span style="color: yellow"><?php echo $Gerant ?></span><br>
                    <span style="color: green;"><?php echo $Responsable ?></span>
            </p>
        </div>
        <div class="last-update">
            <div class="annonce">
                <h4><?php echo $LastUpRules ?></h4>
                <i class="fas fa-pencil-alt"></i> <?php echo $DateLastUpdate ?>
            </div>
        </div>
    </div>
    <section id="discord" class="anchor-target content-section">
        <img src="assets/img/discord.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong> <?php echo $RulesSubTitleCatone ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <?php echo $RulesSubCatOneone ?>
        </div>
    </section>
    <section id="systeme-paliers" class="anchor-target content-section">
        <img src="assets/img/pallier.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattreetree ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <?php echo $RulesSubCattreetree ?>
        </div>
    </section>

    <section id="progression-paliers" class="anchor-target content-section">
        <img src="assets/img/pallier.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong> <?php echo $RulesSubTitleCattreefour ?> </strong></h2>
        </div>
        <div class="parareglementhrp">
            <?php echo $RulesSubCattreefour ?>
        </div>
    </section>
    <section id="reglementhrp" class="anchor-target content-section active">
        <img src="assets/img/reglementhrp.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattwoeone ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <?php echo $RulesSubCatzero ?>
        </div>
    </section>

    <section id="ticketreport" class="anchor-target content-section">
        <img src="assets/img/ticketreport.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattwotwo ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <div class="zonesafe-alert-box">
                <span class="zonesafe-alert-icon"></span>
                <span class="zonesafe-alert-text">
                    <?php echo $RulesSubCattwotwo ?>
            </div>
    </section>

    <section id="sanction" class="anchor-target content-section">
        <img src="assets/img/sanctions.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong> <?php echo $RulesSubTitleCattwotree ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <?php echo $RulesSubCattwotree ?>
        </div>
        </div>
    </section>
    <section id="reglementrp" class="anchor-target content-section">
        <img src="assets/img/fondamentauxrp.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattwofour ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <div class="rp-dropdown">
                <button class="rp-dropbtn">Le Powergaming</button>
                <div class="rp-dropdown-content">
                    <?php echo $RulesSubCattwofour ?>

                </div>
            </div>
    </section>

    <section id="regleasavoir" class="anchor-target content-section">
        <img src="assets/img/regleasavoir.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattwofive ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <?php echo $RulesSubCattwofive ?>
        </div>
    </section>
    <section id="zonessafes" class="anchor-target content-section">
        <img src="assets/img/zonesafes.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattwosix ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <div class="zonesafe-alert-box">
                <span class="zonesafe-alert-icon"></span>
                <span class="zonesafe-alert-text">
                    <?php echo $RulesSubCattwosix ?>
            </div>
        </div>
    </section>

    <section id="packgraphique" class="anchor-target content-section">
        <img src="assets/img/pack.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattwoseven ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <?php echo $RulesSubCattwoseven ?>
        </div>
        </div>
    </section>
    <section id="masque" class="anchor-target content-section">
        <img src="assets/img/masque.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattreeone ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <?php echo $RulesSubCattreeone  ?>
        </div>
        </div>
    </section>
    <section id="groupegangorganisation" class="anchor-target content-section">
        <img src="assets/img/organisation.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattreetwo ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <?php echo $RulesSubCattreetwo ?>
        </div>
        </div>
    </section>
    <section id="systeme-paliers" class="anchor-target content-section">
        <img src="assets/img/pallier.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattreetree ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>Système de Paliers pour Organisation</strong></p>
            <p><strong>Concept Global :</strong></p>
            <ul>
                <li>Points de Réputation et de Respect : Les équipes gagnent des points de réputation et de respect en accomplissant des missions, <br>en gagnant des combats RP, en participant à des événements de la communauté <br>et en interagissant positivement avec d'autres joueurs.</li>
            </ul>
            <p><strong>Paliers et Récompenses :</strong></p>
            <div class="palier-container">
                <div class="palier">
                    <h3>Palier 0 : Novice</h3>
                    <ul>
                        <li>Slots équipe : 15 membres / 20 objets dans le coffre</li>
                        <li>Véhicules autorisés : 2 Véhicules Off Road / 2 Véhicules type blindé / 1 Moto - 5 Véhicules au total</li>
                        <li>Durée : X</li>
                        <li>Récompense : X</li>
                    </ul>
                </div>
                <div class="palier">
                    <h3>Palier 1 : Apprenti</h3>
                    <ul>
                        <li>Slots équipe : 16 membres / 21 objets dans le coffre</li>
                        <li>Véhicules autorisés : 2 Véhicules Off Road / 3 Véhicules type blindé / 1 Moto - 6 Véhicules au total</li>
                        <li>Durée : 1 semaine</li>
                        <li>Récompense : 2 Armes légères au choix</li>
                    </ul>
                </div>
                <div class="palier">
                    <h3>Palier 2 : Collaborateur</h3>
                    <ul>
                        <li>Slots équipe : 17 membres / 23 objets dans le coffre</li>
                        <li>Véhicules autorisés : 3 Véhicules Off Road / 3 Véhicules type blindé / 1 Moto - 7 Véhicules au total</li>
                        <li>Durée : 2 semaines</li>
                        <li>Récompense : +1 membre supplémentaire, accès à un plan de braquage secondaire, 3 armes légères + 1 million en salle</li>
                    </ul>
                </div>
                <div class="palier">
                    <h3>Palier 3 : Associé</h3>
                    <ul>
                        <li>Slots équipe : 18 membres / 24 objets dans le coffre</li>
                        <li>Véhicules autorisés : 3 Véhicules Off Road / 1 Véhicule exclusif (Raptor, TRX) / 3 Véhicules type blindé / 1 Moto - 8 Véhicules au total</li>
                        <li>Durée : 3 semaines</li>
                        <li>Récompense : 1 changement de propriété autorisé + 1 arme lourde (donnée par les GGI)</li>
                    </ul>
                </div>
                <div class="palier">
                    <h3>Palier 4 : Cadre</h3>
                    <ul>
                        <li>Slots équipe : 19 membres / 25 objets dans le coffre</li>
                        <li>Véhicules autorisés : 3 Véhicules Off Road / 1 Véhicule exclusif (Raptor, TRX) / 4 Véhicules type blindé / 1 Moto - 9 Véhicules au total</li>
                        <li>Durée : 5 semaines</li>
                        <li>Récompense : </li>
                    </ul>
                </div>
                <div class="palier">
                    <h3>Palier 5 : Dirigeant</h3>
                    <ul>
                        <li>Slots équipe : 20 membres / 30 objets dans le coffre</li>
                        <li>Véhicules autorisés : 3 Véhicules Off Road / 2 Véhicules exclusifs (Raptor, TRX) / 5 Véhicules type blindé / 2 Motos - 10 Véhicules au total</li>
                        <li>Durée : 8 à 10 semaines</li>
                        <li>Récompense : Possibilité de contrôler une zone spécifique (Cayo Perico / Roxwood) après une grande scène RP, 30M de cash in-game, +2 membres supplémentaires, +1 véhicule exclusif additionnel</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="progression-paliers" class="anchor-target content-section">
        <img src="assets/img/pallier.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattreefour ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>Comment Up en Palier :</strong></p>
            <ul>
                <li><strong>Palier 0 à 1 : Initiation et Présentation</strong>
                    <ul>
                        <li>Objectif : Rencontrer différents groupes de la ville pour se présenter et établir des relations.</li>
                        <li>Tâches :
                            <ul>
                                <li>Organiser au moins 3 rendez-vous avec des groupes différents pour se présenter et discuter des intentions de l'organisation.</li>
                                <li>Participer à un événement communautaire organisé par le serveur.</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><strong>Palier 1 à 2 : Première Expansion</strong>
                    <ul>
                        <li>Objectif : Démontrer la capacité à réaliser des braquages de base.</li>
                        <li>Tâches :
                            <ul>
                                <li>Réaliser 2 braquages de banque Fleeca avec succès.</li>
                                <li>Réaliser 1 braquage de bijouterie.</li>
                                <li>Avoir une interaction RP positive avec un autre groupe (par exemple, négociation, échange de services).</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><strong>Palier 2 à 3 : Consolidation</strong>
                    <ul>
                        <li>Objectif : Établir une présence économique et démontrer une stabilité.</li>
                        <li>Tâches :
                            <ul>
                                <li>Réaliser 1 braquage de bijouterie supplémentaire.</li>
                                <li>Acquérir et gérer un business en ville (par exemple, un bar, un garage, un club).</li>
                                <li>Organiser une soirée ou un événement RP dans le business acquis pour attirer la communauté.</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><strong>Palier 3 à 4 : Expansion et Influence</strong>
                    <ul>
                        <li>Objectif : Renforcer la présence économique et territoriale.</li>
                        <li>Tâches :
                            <ul>
                                <li>Réaliser 2 braquages de bijouterie supplémentaires.</li>
                                <li>Maintenir le business en ville et montrer des signes de prospérité (par exemple, augmentation des bénéfices, expansion du personnel).</li>
                                <li>Contrôler un point de vente de drogues à la fin de la semaine et le défendre avec succès.</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><strong>Palier 4 à 5 : Domination</strong>
                    <ul>
                        <li>Objectif : Prouver la capacité à exécuter des braquages de grande envergure et consolider le pouvoir.</li>
                        <li>Tâches :
                            <ul>
                                <li>Réaliser un braquage de la Banque Centrale avec succès.</li>
                                <li>Maintenir et faire prospérer le business en ville.</li>
                                <li>Contrôler au moins un point de vente de drogues à la fin de la semaine et défendre ce territoire contre les attaques.</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>
    <section id="voldevehicule" class="anchor-target content-section">
        <img src="assets/img/voldevehicule.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattreefive ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>Utilisation des véhicules volés :</strong></p>
            <ul>
                <li>Les véhicules volés ne peuvent être utilisés que pour des activités RP spécifiques, telles que des braquages ou des fuites.</li>
                <li>Il est interdit d'utiliser des véhicules volés pour des activités hors RP ou pour des avantages personnels.</li>
            </ul>
            <p><strong>Retour des véhicules :</strong></p>
            <ul>
                <li>Après utilisation, les véhicules volés doivent être abandonnés dans des lieux réalistes et accessibles.</li>
                <li>Les véhicules ne doivent pas être détruits intentionnellement sans raison RP.</li>
            </ul>
            <div class="alert-box">
                <span class="alert-icon"></span>
                <span class="alert-text">
                    <strong>Vos groupes doivent respecter ces règles et les appliquer sous peine de sanction.</strong>
                </span>
            </div>
        </div>
    </section>
    <section id="alliance" class="anchor-target content-section">
        <img src="assets/img/alliance.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattreesix ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>Règles des alliances :</strong></p>
            <ul>
                <li>Il est autorisé de former une alliance entre gangs ou organisations pour faire la guerre à un <br>autre groupe, sous condition de l'ouverture d'un ticket.</li>
                <li>Il est autorisé de former une alliance pour faire du business.</li>
                <li>Toute alliance doit être déclarée aux administrateurs du serveur pour approbation.</li>
                <li>Les alliances ne doivent pas entraîner de déséquilibre majeur dans le jeu.</li>
                <li>Les membres d'une alliance doivent respecter les règles RP et ne pas abuser de leur position de force.</li>
            </ul>
            <p><strong>Activités d'alliance :</strong></p>
            <ul>
                <li>Les alliances peuvent collaborer pour des activités économiques légales telles que des entreprises conjointes.</li>
                <li>Les alliances peuvent organiser des événements RP ensemble, sous réserve de l'approbation des administrateurs.</li>
                <li>Il est interdit d'utiliser une alliance pour couvrir des activités illégales telles que le blanchiment d'argent.</li>
            </ul>
            <p><strong>Sanctions :</strong></p>
            <ul>
                <li>Les alliances non déclarées ou illégales seront dissoutes immédiatement.</li>
                <li>Les membres impliqués dans des activités illégales via une alliance seront sanctionnés individuellement.</li>
                <li>Les alliances abusant de leur pouvoir seront surveillées et pourront être dissoutes par les administrateurs.</li>
            </ul>
            <div class="alert-box">
                <span class="alert-icon"></span>
                <span class="alert-text">
                    <strong>Les alliances abusives, telles que les prises d'otages ou autres actions similaires, seront sanctionnées.</strong>
                </span>
            </div>
        </div>
    </section>
    <section id="trafic" class="anchor-target content-section">
        <img src="assets/img/trafic.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattreeseven ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>Règles de Trafic :</strong></p>
            <ul>
                <li>La vente ou la donation de points illégaux aux forces de l'ordre est interdite, sauf pour négocier des aménagements de peine.</li>
                <li>Tout échange de biens illégaux doit être fait dans des endroits discrets pour éviter les interventions de la police.</li>
                <li>Il est interdit de stocker des biens illégaux dans des zones safes ou des lieux publics, <br>à l'exception des organisations sous couverture légale.</li>
            </ul>
            <p><strong>Vente de Drogue :</strong></p>
            <ul>
                <li>Lorsque vous vendez de la drogue et que vous entendez la police arriver en grand nombre, <br>vous devez les craindre et fuir, en tenant compte du "fear police".</li>
                <li>Les transactions de drogue doivent se faire de manière réaliste et discrète, en évitant les zones fortement surveillées.</li>
                <li>Les prix de vente doivent être cohérents avec le marché noir et les quantités vendues doivent être réalistes.</li>
            </ul>
            <p><strong>Transport de Biens Illégaux :</strong></p>
            <ul>
                <li>Le transport de biens illégaux doit se faire dans des véhicules adaptés et ne doit pas attirer l'attention des forces de l'ordre.</li>
                <li>Les itinéraires de transport doivent être planifiés à l'avance pour éviter les barrages routiers et les contrôles de police.</li>
            </ul>
            <div class="alert-box">
                <span class="alert-icon"></span>
                <span class="alert-text">
                    <strong>Vos groupes doivent respecter ces règles et les appliquer sous peine de sanction.</strong>
                </span>
            </div>
        </div>
    </section>
    <section id="tir" class="anchor-target content-section">
        <img src="assets/img/tir.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattreeheight ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>Utilisation des armes :</strong></p>
            <ul>
                <li>Il est très important de savoir que n’importe quelle arme à feu a le même impact, qu’elle soit chargée ou non.<br> Une arme est avant tout un moyen de pression, donc vous devez privilégier le dialogue à la fusillade.</li>
            </ul>
            <p><strong>Conséquences des tirs :</strong></p>
            <ul>
                <li>Si vous subissez des dégâts suite à des balles, vous ne serez pas considéré blessé par balles, en revanche si vous êtes mis dans l’état <br>coma à cause de ses balles vous serez considéré comme blessé par balles. Vous devez donc jouer un certain PAIN et pensez <br>au fait que vous êtes toujours blessé durant vos prochaines interaction RP.</li>
            </ul>
            <p><strong>Règles des Sommations :</strong></p>
            <ul>
                <li>Les sommations comptent 3 tirs avant le début de la guerre.</li>
                <li>Il doit y avoir une attente de 3 secondes entre chaque sommation.</li>
            </ul>
            <div class="alert-box">
                <span class="alert-icon"></span>
                <span class="alert-text">
                    <strong>Il est strictement interdit de tirer en ville. Si vous voulez prendre quelqu’un en otage vous devez être dans une ruelle à l’abris des regards.</strong>
                </span>
            </div>
        </div>
    </section>
    <section id="loot" class="anchor-target content-section">
        <img src="assets/img/loot.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattreenine ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>Règles de loot :</strong></p>
            <ul>
                <li>Il est interdit de loot les individus et leurs véhicules si les personnes sont dans le coma.</li>
                <li>Vous ne pouvez loot QUE 50% des biens d'un individu, aucune exception n'est autorisée.</li>
                <li>Il est strictement interdit de loot un joueur qui est en train de travailler.</li>
                <li>Le loot de véhicules de service (LSPD/BCSO/EMS) est formellement interdit et sera sévèrement sanctionné.</li>
                <li>Le loot doit se faire de manière réaliste et dans le respect des règles RP. Les comportements abusifs seront sanctionnés.</li>
            </ul>
            <p><strong>Arnaques :</strong></p>
            <ul>
                <li>Aucune arnaque n’est autorisée, c’est strictement INTERDIT. Toute tentative de fraude sera punie sévèrement.</li>
                <li>Il est interdit d'utiliser des subterfuges pour tromper un autre joueur dans le but de le voler.</li>
            </ul>
            <p><strong>Fouilles :</strong></p>
            <ul>
                <li>Il est strictement interdit de fouiller un véhicule LSPD/BCSO/EMS sans l'autorisation explicite d'un staff.</li>
                <li>Les fouilles doivent être réalisées dans un cadre RP cohérent. Les abus seront punis.</li>
            </ul>
            <p><strong>Sanctions :</strong></p>
            <ul>
                <li>Tout non-respect des règles de loot entraînera des sanctions allant du jail à une interdiction permanente du serveur.</li>
                <li>Les récidivistes seront traités plus sévèrement et pourront être bannis définitivement.</li>
            </ul>
            <div class="alert-box">
                <span class="alert-icon"></span>
                <span class="alert-text">
                    <strong>Respectez les règles de loot pour maintenir un environnement de jeu équitable et agréable pour tous les joueurs.</strong>
                </span>
            </div>
        </div>
    </section>
    <section id="labodedrogue" class="anchor-target content-section">
        <img src="assets/img/laboratoire.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattreeten ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>Guerre :</strong></p>
            <ul>
                <li>Pour engager une guerre sur un circuit afin de le récupérer, votre groupe doit avoir une ancienneté de 1 semaine minimum.</li>
                <li>Avant la revendication d'un circuit de drogue, vous devez déclarer vos intentions au groupe <br>revendiquant le circuit en bonne et due forme (RDV, etc.).</li>
                <li>Avant le début d'une guerre, les deux partis doivent se mettre d'accord sur un schéma <br>de guerre qui permettra de définir un vainqueur de celle-ci, et les conséquences pour le groupe perdant.</li>
                <li>Un cooldown de 24h sera appliqué sur le groupe ayant perdu une guerre (il ne pourra plus déclarer de guerre).</li>
                <li>Un cooldown de 48h sera mis en place avant une nouvelle guerre sur un même <br>circuit afin de laisser au groupe vainqueur le temps de la revendiquer et de <br>calmer les tensions sur le labo afin de ne pas attirer la LSPD/BCSO.</li>
            </ul>
            <p><strong>Revendication :</strong></p>
            <ul>
                <li>Chaque groupe ne peut revendiquer qu'un labo de drogue ainsi que 2 zones de ventes par organisation MAX et 1 seul par gang.</li>
                <li>Aucun indépendant n'est autorisé à être sur un point de drogue. Ils sont réservés aux groupes officiels.</li>
                <li>Tout groupe allant sur une autre drogue que celle qu'il revendique se verra sanctionné (avertissement groupe).</li>
                <li>Les revendications de labo de drogue doivent être cohérentes en fonction de votre groupe.</li>
            </ul>
            <div class="alert-box">
                <span class="alert-icon"></span>
                <span class="alert-text">
                    <strong>Vos groupes doivent respecter ces règles et les appliquer sous peine de sanction.</strong>
                </span>
            </div>
        </div>
    </section>
    <section id="prisedotage" class="anchor-target content-section">
        <img src="assets/img/prisedotage.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattreeeleven ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>Rançon :</strong></p>
            <ul>
                <li>Vous êtes dans l'obligation de payer la rançon de l'otage en drogue ou en argent sale.</li>
            </ul>
            <p><strong>En drogue :</strong></p>
            <ul>
                <li>Weed : 200 Bas Gradé / 500 Gradé</li>
                <li>Meth : 250 Bas Gradé / 550 Gradé</li>
                <li>Cocaine : 300 Bas Gradé / 600 Gradé</li>
            </ul>
            <p><strong>Argent sale :</strong></p>
            <ul>
                <li>Bas gradé : 50K</li>
                <li>Gradé : 100k</li>
                <li>Lead : 300k</li>
            </ul>
            <p><strong>Délai de paiement :</strong></p>
            <ul>
                <li>Si la rançon ne peut être payée dans les 24 heures, les preneurs d'otages peuvent demander 30% de plus par rapport à la rançon de <br>base. Si cela persiste, une mort RP peut être engagée.</li>
            </ul>
            <p><strong>Interdictions :</strong></p>
            <ul>
                <li>Il est interdit de prendre en otage quelqu'un à l'intérieur d'une zone de Mass RP (villa, magasin, entreprise, etc.) <br>sauf en temps de guerre, et cela doit être bien fait.</li>
            </ul>
            <p><strong>Fear otage :</strong></p>
            <ul>
                <li>Le fear otage est à respecter. Par conséquent, si un groupe engage les tirs alors qu'il y a un otage à eux présent dans le camp ennemi,<br> l'otage prendra une mort RP.</li>
            </ul>
            <p><strong>Précision :</strong></p>
            <ul>
                <li>Une scène de négociation doit être une négociation tout simplement, c'est-à-dire que les deux partis doivent trouver un accord.</li>
            </ul>
            <div class="alert-box">
                <span class="alert-icon"></span>
                <span class="alert-text">
                    <strong>Vos groupes doivent respecter ces règles et les appliquer sous peine de sanction.</strong>
                </span>
            </div>
        </div>
    </section>
    <section id="mortrp" class="anchor-target content-section">
        <img src="assets/img/mortrp.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattreetwlv ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>Règles générales :</strong></p>
            <ul>
                <li>Si jamais vous quittez votre groupe illégal et que votre chef décide de vous infliger une mort RP, <br>cela doit être fait avec une belle scène et vous devez retrouver la personne en question. <br>Si jamais la personne ayant quitté a rejoint une autre organisation, une guerre peut être lancée.</li>
                <li>Il est interdit de donner tous ses biens à quelqu’un avant de wipe son personnage.</li>
            </ul>
            <p><strong>Déclaration :</strong></p>
            <ul>
                <li>Vous êtes dans l'obligation de déclarer la Mort RP d’un joueur en laissant des indices type vidéo/photos etc...</li>
            </ul>
            <p><strong>Conditions :</strong></p>
            <ul>
                <li>Une Mort RP peut être appliquée que par le chef du groupe, le loot est autorisé <br>en cas de Mort RP si validé auprès des GGI. (sinon aucun loot).</li>
                <li>Aucun retour dans le même groupe ne sera autorisé.</li>
            </ul>
            <p><strong>NoFear :</strong></p>
            <ul>
                <li>Tout NoFear d’un joueur/groupe qui va causer par la suite un GF ou une scène déplorable se verra <br>très fortement sanctionné (risque de wipe perso ou wipe groupe).</li>
            </ul>
        </div>
    </section>
    <section id="gunfight" class="anchor-target content-section">
        <img src="assets/img/gunfight.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattreetrt ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>Règles générales :</strong></p>
            <ul>
                <li>Tout trash ou allusion HRP est strictement interdit.</li>
                <li>Il est interdit de revenir sur zone après un GF.</li>
                <li>Il est interdit de remettre un kevlar pendant un GF.</li>
                <li>Il est interdit de tirer/braquer sur un rendez-vous.</li>
                <li>Il est interdit d'exploser les véhicules ou faire les pneus après un GF.</li>
            </ul>
            <p><strong>Gestion des PO :</strong></p>
            <ul>
                <li>1 PO minimum durant un tapage -> Jouer la PO en priorité.</li>
                <li>Tout No Fear/Bait durant un tapage d'un groupe sera sévèrement puni.</li>
                <li>Il est obligatoire de drop lors du tapage de véhicule (pas de bait autorisé sauf baqueuse).</li>
                <li>Il est interdit de tirer s'il n'y a pas eu d'interaction entre les 2 groupes (dialogue ou PO avec négociation).</li>
                <li>Il est donc interdit de déclencher une fusillade sans raison.</li>
            </ul>
            <p><strong>Restrictions :</strong></p>
            <ul>
                <li>Il est interdit de prendre en otage quand le GF a déjà commencé.</li>
                <li>Des plans pneus peuvent être autorisés à partir de 15 minutes de course-poursuite minimum.</li>
                <li>Il est interdit de venir par vague sur un GF. Si une voiture arrive après que le GF a commencé, il ne doit pas tirer.</li>
                <li>Il est interdit de re tirer ou revenir sur scène après une réanimation.</li>
                <li>Il est interdit de tirer sur des EMS sans raison valable. Vous ne pouvez pas les PO <br>sans autorisation d'un staff sur discord ou plus pour une scène. De même pour les agents du gouvernement.</li>
                <li>Une seule baqueuse est tolérée. Moto obligatoire.</li>
            </ul>
            <div class="alert-box">
                <span class="alert-icon"></span>
                <span class="alert-text">
                    <strong>Vos groupes doivent respecter ces règles et les appliquer sous peine de sanction.</strong>
                </span>
            </div>
        </div>
    </section>
    <section id="vehicule" class="anchor-target content-section">
        <img src="assets/img/vehicule.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattreefout ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>Règles générales :</strong></p>
            <ul>
                <li>Il est interdit de monter une montagne avec un autre véhicule qu'un SUV/Tout-Terrain.</li>
                <li>Il est interdit de tirer depuis un hélico (un seul max par convoi) si celui-ci n'est pas en stationnaire. En cas de crash en hélicoptère<br> ou avion, une mort RP peut être appliquée.</li>
                <li>Il est interdit de rase-motte en ville.</li>
                <li>Il est interdit de farm avec une moto.</li>
                <li>Il est interdit de rouler avec des roues en moins.</li>
            </ul>
            <p><strong>Obligations et limitations :</strong></p>
            <ul>
                <li>Obligation d'utiliser des véhicules cohérents pour votre convoi.</li>
                <li>Nombre de véhicules max : 6 + 1 Guetteuse (Moto), Total de 26 places.</li>
                <li>Limitation des véhicules import niveau convoi : 2 max.</li>
            </ul>
            <div class="alert-box">
                <span class="alert-icon"></span>
                <span class="alert-text">
                    <strong>Chaque règle concernant les véhicules doit être respectée et appliquée.</strong>
                </span>
            </div>
        </div>
    </section>
    <section id="attaqueQG" class="anchor-target content-section">
        <img src="assets/img/attaquedeqg.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong><?php echo $RulesSubTitleCattreefivt ?></strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>Règles pour les attaques de QG :</strong></p>
            <ul>
                <li>La limite d'attaque de QG est fixée à 1 attaque par semaine.</li>
                <li>Interdiction de sortir du QG pendant une attaque.</li>
                <li>Interdiction de remonter en véhicule après avoir drop.</li>
                <li>Interdiction de se RE-KEV.</li>
                <li>Si votre groupe fait plus d'un DAY OFF dans la semaine, votre QG pourra être attaqué malgré votre absence.</li>
            </ul>
            <p><strong>Sanctions :</strong></p>
            <ul>
                <li><strong>Exclusion temporaire :</strong> Pour toute violation des règles d'attaque de QG.</li>
                <li><strong>Exclusion définitive :</strong> En cas de récidive ou de violation grave.</li>
            </ul>
            <p><strong>Surveillance et Détection :</strong></p>
            <ul>
                <li>Des vérifications régulières seront effectuées pour s'assurer du respect des règles d'attaque de QG.</li>
                <li>Les joueurs sont encouragés à signaler toute violation des règles d'attaque de QG.</li>
                <li>Les captures d'écran ou les enregistrements vidéo peuvent être utilisés comme preuves lors de la vérification des attaques de QG.</li>
            </ul>
            <p><strong>Recommandations :</strong></p>
            <ul>
                <li>Respectez toujours les règles d'attaque de QG pour garantir une expérience de jeu équitable pour tous.</li>
                <li>Consultez les administrateurs du serveur en cas de doute sur les règles d'attaque de QG.</li>
            </ul>
            <div class="alert-box">
                <span class="alert-icon"></span>
                <span class="alert-text">
                    <strong>Respectez les règles d'attaque de QG ! Sinon, vous serez sanctionné. Le respect des règles garantit une expérience de jeu équitable pour tous.</strong>
                </span>
            </div>
        </div>
    </section>
    <section id="reglement-entreprises" class="anchor-target content-section">
        <img src="assets/img/entreprise.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong>🏛️ | Règlement Entreprises</strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>📚 Général</strong></p>
            <ul>
                <li>Il est interdit pour les patrons de se servir dans le coffre de l’entreprise à des fins personnelles.</li>
                <li>Les entreprises hors boutique sans activité patronale pendant 1 semaine seront <br>récupérées et remises sous dossier. (hors absence prévenue)</li>
                <li>Il est totalement interdit de vendre/donner son entreprise. Si vous ne souhaitez plus gérer votre entreprise,<br> vous devez faire un ticket et celle-ci sera remise sous dossier.</li>
                <li>Le FISC est obligatoire pour les entreprises déclarées. Tout manquement entraînera des sanctions RP et HRP.</li>
                <li>Un patron ne peut être patron que d’une seule et unique entreprise.</li>
                <li>Un chef d’entreprise doit fournir une raison valable pour un licenciement.</li>
            </ul>
            <p><strong>📈 Gestion Financière</strong></p>
            <ul>
                <li>Les revenus de l’entreprise doivent être déclarés et utilisés pour le développement de celle-ci.</li>
                <li>Il est interdit d’utiliser les fonds de l’entreprise à des fins personnelles sans justification<br> valable et sans l’approbation des administrateurs.</li>
                <li>Les bénéfices doivent être répartis équitablement entre les employés selon leur contribution et leur rôle.</li>
            </ul>
            <p><strong>🛠️ Administration et Supervision</strong></p>
            <ul>
                <li>Les entreprises doivent respecter les lois et règlements en vigueur sur le serveur.</li>
                <li>Les patrons sont responsables de la conduite de leurs employés et doivent veiller à ce que ceux-ci respectent les règles du serveur.</li>
                <li>Des inspections régulières peuvent être effectuées pour s’assurer du respect des règles par les entreprises.</li>
                <li>Toute infraction constatée sera sanctionnée selon la gravité des faits (avertissement, suspension, voire bannissement).</li>
            </ul>
            <p><strong>🌟 Bonnes Pratiques</strong></p>
            <ul>
                <li>Encourager l’innovation et le développement au sein de l’entreprise pour améliorer les services offerts.</li>
                <li>Fournir des formations régulières aux employés pour les aider à se perfectionner dans leurs rôles respectifs.</li>
                <li>Favoriser un environnement de travail respectueux et inclusif pour tous les membres de l’entreprise.</li>
                <li>Participer activement aux événements communautaires et aux partenariats pour renforcer la présence de l’entreprise sur le serveur.</li>
            </ul>
            <div class="alert-box">
                <span class="alert-icon"></span>
                <span class="alert-text">
                    <strong>Respectez ces règles pour assurer une gestion équitable et transparente de votre entreprise dans le jeu. Toute infraction sera sévèrement sanctionnée. Votre engagement envers ces pratiques garantit non seulement votre succès, mais aussi une expérience de jeu enrichissante pour tous.</strong>
                </span>
            </div>
        </div>
    </section>
    <section id="concessionnaire" class="anchor-target content-section">
        <img src="assets/img/concessionnaire.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong>🚗 | Concessionnaire</strong></h2>
        </div>
        <div class="parareglementhrp">
            <ul>
                <li>Il est interdit de vendre des véhicules d’entreprises, EMS, Police ou gouvernement sans vérification préalable <br>auprès d’un admin pour confirmer le statut HRP de la personne.</li>
                <li>Il est interdit d’attribuer gratuitement des véhicules à ses amis. Toute personne <br>voulant un véhicule est dans l’obligation de le payer à sa juste valeur.</li>
                <li>Les véhicules de haute performance doivent être vendus avec une vérification supplémentaire pour <br>s'assurer qu'ils ne sont pas utilisés à des fins illégales.</li>
                <li>Il est interdit de modifier les prix des véhicules de manière excessive pour en tirer un profit personnel.</li>
                <li>Les employés du concessionnaire doivent suivre une formation régulière sur <br>les nouvelles politiques et les meilleures pratiques de vente de véhicules.</li>
                <li>Les véhicules endommagés ou accidentés doivent être réparés avant d'être mis en vente. <br>La transparence sur l'état des véhicules est obligatoire.</li>
                <li>Les plaintes des clients doivent être traitées avec sérieux et résolues dans les plus brefs <br>délais pour maintenir la réputation du concessionnaire.</li>
                <li>Des audits réguliers seront effectués pour s'assurer que toutes les transactions sont conformes aux règles et aux politiques établies.</li>
            </ul>
            <div class="alert-box">
                <span class="alert-icon"></span>
                <span class="alert-text">
                    <strong>Respectez ces règles pour assurer une gestion équitable et transparente de votre entreprise dans le jeu. Toute infraction sera sévèrement sanctionnée. Votre engagement envers ces pratiques garantit non seulement votre succès, mais aussi une expérience de jeu enrichissante pour tous.</strong>
                </span>
            </div>
        </div>
    </section>
    <section id="mecano" class="anchor-target content-section">
        <img src="assets/img/mecano.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong>🔧 | Mécano</strong></h2>
        </div>
        <div class="parareglementhrp">
            <ul>
                <li>Il est interdit d’installer des armes sur les véhicules pouvant les recevoir ainsi que le blindage.</li>
                <li>Il est interdit d’utiliser vos permissions en dehors de votre service.
                    <br>Exemple : déverrouiller une voiture pour la voler.
                </li>
                <li>Il est interdit de usebug pour raccourcir l'animation de réparation ou autre.</li>
                <li>Le nombre d’employés maximal est de 30 personnes.</li>
                <li>Les mécanos doivent suivre une formation régulière pour être à jour avec les dernières <br>techniques de réparation et de modification de véhicules.</li>
                <li>Les outils et équipements de l'atelier doivent être maintenus en bon état et utilisés uniquement pour des réparations légitimes.</li>
                <li>Les mécanos doivent garder un registre de toutes les réparations et modifications effectuées, <br>y compris les détails des clients et des véhicules.</li>
                <li>Les employés doivent respecter les heures d'ouverture de l'atelier et ne pas travailler sur <br>des véhicules en dehors de ces heures sans autorisation.</li>
                <li>Les mécanos doivent signaler immédiatement toute activité suspecte ou illégale <br>observée dans l'atelier au responsable ou aux autorités compétentes.</li>
                <li>Les pièces de rechange et les matériaux doivent être commandés auprès de fournisseurs <br>agréés pour garantir leur qualité et leur conformité.</li>
            </ul>
            <div class="alert-box">
                <span class="alert-icon"></span>
                <span class="alert-text">
                    <strong>Respectez ces règles pour assurer une gestion équitable et transparente de votre entreprise dans le jeu. Toute infraction sera sévèrement sanctionnée. Votre engagement envers ces pratiques garantit non seulement votre succès, mais aussi une expérience de jeu enrichissante pour tous.</strong>
                </span>
            </div>
        </div>
    </section>
    <section id="lspdbcso" class="anchor-target content-section">
        <img src="assets/img/hierarchie.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong>👮‍♂️ | Règlement LSPD/BCSO</strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>✅ | Autorisé</strong></p>
            <ul>
                <li>La LSPD/BCSO a le droit de faire les pneus d’un véhicule lors d’une course poursuite si <br>les individus ont ouvert le feu en premier depuis le véhicule.</li>
                <li>La LSPD/BCSO a le droit de PIT un véhicule après 5 minutes de course poursuite, et à basse vitesse.</li>
                <li>La LSPD/BCSO a le droit de faire 2-3 descentes chacun, sous validation d’un GL, par semaine sur les points de drogue.</li>
                <li>Si une fusillade est engagée sur un point de drogue, la LSPD se doit de prendre des infos afin de constituer leur dossier de descente.</li>
                <li>La LSPD/BCSO a le droit de patrouiller autour des zones de gang, de villa,<br> mais n’a pas le droit d’intervenir dans celles-ci sans raison valable.</li>
                <li>La LSPD/BCSO a autorisation d'utiliser les armes boutiques suivantes <br>: Glock 17 / HKUMP. Pour l’état major, les armes suivantes sont autorisées : Scar-17.</li>
                <li>La LSPD/BCSO est autorisé à menotter des personnes en incapacité <br>(coma, KO, etc.) s’ils jugent nécessaire pour leur sécurité et celles des citoyens.</li>
                <li>Les agents peuvent utiliser les véhicules spéciaux tels que les hélicoptères et les véhicules blindés lors <br>d'opérations à haut risque, sous approbation de l'état-major.</li>
                <li>Les descentes de police doivent être planifiées à l'avance et inclure des briefings détaillés pour tous les agents participants.</li>
                <li>Les agents doivent porter des caméras corporelles en tout temps pendant le service pour assurer la transparence et la responsabilité.</li>
                <li>Les patrouilles doivent être effectuées en binôme pour assurer la sécurité des agents et des citoyens.</li>
                <li>La force létale ne doit être utilisée qu'en dernier recours et doit être signalée immédiatement à l'état-major après utilisation.</li>
                <li>La LSPD/BCSO est autorisée à tirer seulement, et seulement si, un individu représente une menace <br>immédiate à la vie d’un tiers ou d’un agent, en cas de légitime défense ou de riposte.</li>
            </ul>
            <p><strong>🚫 | Interdit</strong></p>
            <ul>
                <li>Il est interdit de faire un retour PDP en pleine scène.</li>
                <li>Il est interdit pour la LSPD/BCSO d’ouvrir le feu en premier, vous devez privilégier le dialogue.</li>
                <li>Il est interdit de contrôler une personne sans être en service et sans aucun signe de police.</li>
                <li>Il est interdit d’utiliser vos armes de service en dehors de votre service.</li>
                <li>Il est interdit de vendre une arme de LSPD/BCSO sous peine d’un ban permanent.</li>
                <li>Il est interdit de prendre une arme en pleine MED à des fins personnels.</li>
                <li>La saisie de l’arme est obligatoire via le job.</li>
                <li>Il est interdit de laisser un individu plus d’une heure en cellule, peu importe les faits reprochés.</li>
                <li>Il est interdit de passer d’un RP illégal à un RP LSPD ou BCSO sans passer par un wipe. Le contraire y compris.</li>
                <li>Il est interdit d’être ripou sans validation d’un GL (via un dossier).</li>
                <li>Toutes armes dites illégales sont interdites pour la LSPD/BCSO.</li>
                <li>La LSPD/BCSO a le droit de sortir uniquement deux véhicules d’intervention rapide (SRU) sur la map, c’est-à-dire une chacune.</li>
                <li>Il est interdit d’arriver à faire la distinction entre argent propre et argent sale, vous devez effectuer une vérification RP. <br>Vérifier via un style vérificateur dans votre voiture/coffre.</li>
                <li>Il est interdit de fouiller quelqu’un sans aucune raison valable.</li>
                <li>Vous ne pouvez pas braquer/prendre en otage un LSPD/BCSO SEUL en service.</li>
                <li>Il est interdit de loot une personne étant en état de coma ou incapacité.</li>
                <li>Il est interdit d’utiliser un PED pour faire un RP illégal, l’inverse également.</li>
                <li>L’utilisation d’un véhicule de police en dehors de votre service est interdite.</li>
                <li><span style="color: red"><strong>Les véhicules au choix comportant des gyrophares même cachés ne peuvent pas être utilisés en civil.</strong></span></li>
                <li>Il est interdit pour la LSPD/BCSO d’intervenir sur des attaques de QG SAUF si les agents sont pris pour cible.</li>
            </ul>
            <p><strong>🔍 | Fouille</strong></p>
            <ul>
                <li>Le suspect monte dans un véhicule de police.</li>
                <li>Le suspect dissimule son visage d’une quelconque façon (masque, cagoule, casque, etc.)</li>
                <li>Un témoignage décrit très précisément une personne/véhicule comme étant dangereuse. <span style="color: red"><strong>Preuve RP nécessaire.</strong></span></li>
                <li>Le suspect porte un holster.</li>
                <li>Le suspect a une arme apparente.</li>
                <li>Le suspect évite un contrôle lors d’un barrage routier.</li>
                <li>Le suspect fait preuve d’un comportement dangereux pour les autres.</li>
                <li>Le suspect porte un gilet pare-balle.</li>
                <li>En cas de 🚨 Defcon</li>
            </ul>
            <div class="alert-box">
                <span class="alert-icon"></span>
                <span class="alert-text">
                    <strong>VEILLEZ À AVOIR UNE COHÉRENCE POUR POUVOIR FOUILLER.</strong>
                </span>
            </div>
            <p><strong>📁 | Autres</strong></p>
            <ul>
                <li>Vous ne devez pas abuser de vos fonctions, ne pas insulter les citoyens, et garder votre sang froid ainsi que votre professionnalisme.<br> Vous représentez la loi, le respect est donc primordial.</li>
                <li>Un policier ripou est constamment en danger de MORT RP.</li>
                <li>L’utilisation du masque au sein de la LSPD/BCSO est réservée à la DOA uniquement.</li>
                <li>La LSPD/BCSO peut faire une demande de changement de DEFCON par ticket, qui sera validé ou non.</li>
                <li>1 LSPD/BCSO compte pour 2.</li>
                <li>Il doit y avoir 3 avertissements ORAUX espacés d’environ 3 à 5 secondes pour que les individus dangereux lâchent leurs armes, et qu’une négociation puisse avoir lieu.</li>
                <li>Si au bout de ces 3 sommations/avertissements, les individus n’obtempèrent pas, l’utilisation de la force devient autorisée.</li>
            </ul>
            <div class="alert-box">
                <span class="alert-icon"></span>
                <span class="alert-text">
                    <strong>Chaque règle concernant les actions de la LSPD/BCSO doit être respectée et appliquée pour garantir la sécurité et la justice.</strong>
                </span>
            </div>
        </div>
    </section>
    <section id="hierarchielspd" class="anchor-target content-section">
        <img src="assets/img/lspdbcso.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong>🚓 | Hiérarchie de la LSPD</strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>L'État Major</strong></p>
            <ul>
                <li><strong>Commandant :</strong> le commandant est le responsable du département, chargé de la liaison avec le gouvernement<br> et les entreprises, il a toutes les permissions sur le service.</li>
                <li><strong>Capitaine :</strong> le capitaine est le responsable-adjoint du département, chargé de la liaison avec le gouvernement<br> et les entreprises et doit veiller à la bonne entente avec la BCSO et coordonner l’ensemble de l’effectif.</li>
                <li><strong>Lieutenant :</strong> le lieutenant est responsable des divisions, en charge de veiller au bon fonctionnement<br> des unités et du bon travail de leurs référents, ainsi que de veiller <br>à la bonne réalisation des missions données aux gradés du commandement.</li>
            </ul>
            <p><strong>Le Commandement</strong></p>
            <ul>
                <li><strong>Sergent Chef :</strong> le sergent-chef est le responsable du commandement et de la liaison entre l’État Major et le Commandement.</li>
                <li><strong>Sergent II :</strong> le sergent II est un agent confirmé du commandement, il dispose de <br>l’ensemble des autorisations pour la bonne gestion de ses effectifs.</li>
                <li><strong>Sergent I :</strong> le sergent I est un agent novice au sein du commandement, il doit veiller à l’application du règlement, <br>prendre des lead OP et doit conseiller les O.S pour qu’ils s’améliorent et doit aussi prendre ses marques au sein de l’équipe du commandement.</li>
                <li><strong>Officier Supérieur :</strong> l’officier supérieur est un agent ayant les capacités de monter commandement<br> il devra alors prouver ses compétences pendant 2 semaines et passer son Brevet III.</li>
            </ul>
            <p><strong>Les Agents</strong></p>
            <ul>
                <li><strong>Senior Lead Officer :</strong> le senior lead officer est un officier d’expérience, c’est en toute logique <br>qu’il dispose de permissions plus grandes, il dirige les rookies et officiers, il peut <br>réaliser des dispatchs, effectuer des convocations avec un membre du commandement. La promotion à ce grade n’est pas automatique et se fait uniquement sous <br>décision de l’État Major ou peut demander à l’obtenir car il ne veut pas rentrer dans le commandement.</li>
                <li><strong>Officier III :</strong> l’officier III est un membre du service pouvant être amené à prendre des lead OP lorsqu’aucuns <br>supérieurs ne sont disponibles, il peut aussi passer son brevet III et peut prétendre à passer officier supérieur il est un officier confirmé et doit montrer l’exemple.</li>
                <li><strong>Officier II :</strong> l’officier II est un membre aguerri du service, il commence à prendre de l’importance et a l'obligation de <br>se spécialiser dans une unité principale pour monter en grade.</li>
                <li><strong>Officier I :</strong> l’officier a terminé sa période d’essai, il peut maintenant rejoindre une unité et doit <br>valider ses formations complémentaires pour monter en grade.</li>
                <li><strong>Rookie :</strong> le rookie est un agent en période d’essai, la moindre erreur mène à une radiation du programme de formation.<br> Il doit valider ses formations élémentaires pour être promu au grade supérieur.</li>
            </ul>
        </div>
    </section>
    <section id="hierarchiebcso" class="anchor-target content-section">
        <img src="assets/img/bcso.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong>⭐ | Hiérarchie de la BCSO</strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>Le Command Staff</strong></p>
            <ul>
                <li><strong>Sheriff :</strong> le sheriff est le responsable du département, chargé de la liaison avec le gouvernement et les entreprises.</li>
                <li><strong>Undersheriff :</strong> l'undersheriff est le responsable-adjoint du département, chargé de la liaison avec le LSPD.</li>
            </ul>
            <p><strong>Le Supervisor Staff</strong></p>
            <ul>
                <li><strong>Assistant-Sheriff :</strong> l’officier II est un membre aguerri du service, il commence à prendre de l’importance et a <br>l'obligation de se spécialiser dans une unité principale pour monter en grade.</li>
                <li><strong>Division-Chief :</strong> le division chief est responsable des divisions, chargé de veiller au <br>bon fonctionnement des unités et du bon travail de leurs référents.</li>
                <li><strong>Area Commander :</strong> l'area commander est le responsable du supervisor staff <br>et de la liaison entre le command staff et le supervisor staff.</li>
                <li><strong>Captain :</strong> le captain est le responsable-adjoint du supervisor staff, il dispose de l’ensemble <br>des autorisations pour la bonne gestion de ses effectifs.</li>
                <li><strong>Lieutenant :</strong> le lieutenant est un agent confirmé de la supervisor team, il veille à l'application du règlement,<br> prend des lead OP et doit conseiller les sergents pour qu'ils s'améliorent.</li>
                <li><strong>Sergent :</strong> le sergent est un agent ayant réussi sa sergeant school, il doit faire ses <br>preuves pour conserver son poste. Il est chargé de gérer les conflits internes avec ses collègues de la ST.</li>
            </ul>
            <p><strong>L'Executive Deputy</strong></p>
            <ul>
                <li><strong>Senior-Deputy :</strong> le senior-deputy est un deputy d’expérience, c’est en toute logique qu’il <br>dispose de permissions plus grandes, il dirige les juniors et deputy, il peut réaliser <br>des dispatchs, effectuer des convocations avec un membre de la <br>supervisor team et est prioritaire pour prendre les lead OP. La promotion à ce grade n’est pas automatique et se fait uniquement sous décision du command-staff.</li>
                <li><strong>Deputy-Sheriff III :</strong> le deputy III est un membre du service pouvant être amené à prendre <br>des lead OP lorsqu’aucuns supérieurs ne sont disponibles, il peut aussi passer son brevet III et peut prétendre à passer sergeant.</li>
                <li><strong>Deputy-Sheriff II :</strong> le deputy II est un membre aguerri du service, il commence à prendre de <br>l’importance et a l'obligation de se spécialiser dans une unité principale pour monter en grade.</li>
                <li><strong>Deputy-Sheriff I :</strong> le deputy I a terminé sa période d’essai, il peut maintenant rejoindre une unité <br>et doit valider ses formations complémentaires pour monter en grade.</li>
                <li><strong>Junior :</strong> le junior est un agent en période d’essai, la moindre erreur mène à une radiation du <br>programme de formation. Il doit valider ses formations élémentaires pour être promu au grade supérieur.</li>
            </ul>
        </div>
    </section>
    <section id="defcon" class="anchor-target content-section">
        <img src="assets/img/defcon.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong>📢 | Defcon</strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>🪖 Defcon 1</strong></p>
            <p>Préparation maximale des forces de l'ordre, uniquement pour une zone en particulier et pendant 48 heures max.</p>
            <p><strong>Forces de l'ordre</strong></p>
            <ul>
                <li>Toutes les forces de l'ordre sont inopérantes et répondent tous désormais sur la dénomination de <strong>"Armée"</strong>.</li>
                <li>Les forces de l'ordre n’ont plus le pouvoir d’agir en ville et sont remplacées par l'armée dans tous les actes et scènes.</li>
                <li>Armée déployée sur tout le territoire désigné en DEFCON 1.</li>
                <li>Protection prioritaire du Gouvernement.</li>
                <li>Mise en place de barrages aux frontières du territoire désigné en DEFCON 1.</li>
                <li>Utilisation des véhicules de l'armée uniquement.</li>
                <li>Armée sur la radio d’urgence.</li>
                <li>Pas d’arrestation, tir immédiat.</li>
                <li>Suspension de tous les droits de tous les citoyens, dans la limite du raisonnable. (Si abus constaté par la hiérarchie, sanction sera mise).</li>
            </ul>
            <p><strong>🪖 Defcon 2</strong></p>
            <p>Accroissement supplémentaire dans la préparation des forces, mais inférieure à la préparation maximale.</p>
            <p><strong>Forces de l'ordre</strong></p>
            <ul>
                <li>Mise en place de barrage possible. (Contrôle des papiers, permis de conduire, permis port d’armes, etc..)</li>
                <li>Équipement de combat. (Max 1 sniper par scène)</li>
                <li>Véhicules basiques / Véhicules aériens / Véhicules blindés.</li>
                <li>Forces de l’ordre à disposition totale du Gouvernement.</li>
                <li>Toutes les unités des forces de l'ordre obéissent aux commandants de la LSPD uniquement.</li>
                <li>Aucun mandat obligatoire dans le cadre d’une opération importante.</li>
                <li>Pendant un délit de fuite, droit de P.I.T au bout de 5min de poursuite. (Foncer dans le véhicule du fuyard pour le déstabiliser).</li>
                <li>Pendant un délit de fuite, droit de faire les pneus au bout de 7min de poursuite. (Un seul pneu suffit pour déstabiliser la conduite du fuyard).</li>
                <li>Tir létale (mort de la personne et non mort RP) après 3 sommations orales uniquement en cas de danger.</li>
                <li>Tir immédiat en cas de force majeure.</li>
                <li>Possibilité de réintégrer la circulation permettant des interceptions des brebis égarées et des engins motorisés.</li>
            </ul>
            <p><strong>🪖 Defcon 3</strong></p>
            <p>Accroissement de la préparation des forces au-dessus de la préparation normale.</p>
            <p><strong>Forces de l'ordre</strong></p>
            <ul>
                <li>Patrouilles intensives. (Vous ne pouvez pas tourner seul en véhicule).</li>
                <li>Équipement en fonction des consignes établies par la hiérarchie. (Possible gilet pare-balle en cas de grosses scènes.)</li>
                <li>Véhicules basiques / Véhicules aériens en cas de besoin.</li>
                <li>Fouille possible : Personnes / Véhicules. (non obligatoire, uniquement en cas de suspicion).</li>
                <li>Pendant un délit de fuite, droit de P.I.T au bout de 5min de poursuite. (Foncer dans le véhicule du fuyard pour le déstabiliser).</li>
                <li>Pendant un délit de fuite, droit de faire les pneus au bout de 7min de poursuite. (Un seul pneu suffit pour déstabiliser la conduite du fuyard).</li>
                <li>Tir létale (mort de la personne et non mort RP) après 3 sommations orales uniquement en cas de danger.</li>
                <li>Tir immédiat en cas de force majeure.</li>
            </ul>
            <p><strong>🪖 Defcon 4</strong></p>
            <p>Préparation normale, mais consignes de sécurité.</p>
            <p><strong>Forces de l'ordre</strong></p>
            <ul>
                <li>Patrouilles normales. (Vous ne pouvez pas tourner seul en véhicule).</li>
                <li>Équipement en fonction des consignes établies par la hiérarchie.</li>
                <li>Véhicules basiques / Véhicules aériens en cas de besoin.</li>
                <li>Pendant un délit de fuite, droit de P.I.T (uniquement avec un véhicule qui possède un pare-buffle) au bout de 5min de poursuite.<br> (Foncer dans le véhicule du fuyard pour le déstabiliser).</li>
                <li>Pendant un délit de fuite, droit de faire les pneus au bout de 7min de poursuite. (Un seul pneu suffit pour déstabiliser la conduite du fuyard).</li>
            </ul>
            <p><strong>🪖 Defcon 5</strong></p>
            <p>Préparation normale en temps de paix.</p>
            <p><strong>Forces de l'ordre</strong></p>
            <ul>
                <li>Patrouilles normales.</li>
                <li>Équipement en fonction des consignes établies par la hiérarchie.</li>
                <li>Véhicules basiques.</li>
            </ul>
            <div class="alert-box">
                <span class="alert-icon"></span>
                <span class="alert-text">
                    <strong>Chaque règle doit être respectée et appliquée pour garantir la sécurité et la justice.</strong>
                </span>
            </div>
        </div>
    </section>
    <section id="reglement-ems" class="anchor-target content-section">
        <img src="assets/img/ems.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong>📑 | Règlement EMS</strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>✅ Autorisé</strong></p>
            <ul>
                <li>Un EMS peut soigner une personne dans un quartier uniquement si on lui a donné l’autorisation d’entrer.</li>
                <li>Un EMS est autorisé à vous mettre une ATA de 10 minutes s’il juge que la situation en nécessite.</li>
            </ul>
            <p><strong>⛔ Interdit</strong></p>
            <ul>
                <li>Il est strictement interdit pour les membres de la direction <br>(directeur, codirecteur et directeur des ressources humaines) de faire de l’illégal.</li>
                <li>Il est formellement interdit de donner/vendre les matériels EMS.</li>
                <li>Il est FORMELLEMENT INTERDIT d’intervenir durant une fusillade, veuillez attendre la fin de cette dernière pour intervenir.</li>
                <li>Vous n’avez pas le droit d’utiliser votre service EMS en faisant de l’illégal. (Pour soigner/réanimer un personnage.)</li>
                <li>Il est interdit de usebug pour raccourcir l'animation de soin ou de réanimation sous peine de sanction.</li>
                <li>Il est interdit de garder le service EMS une fois que la tenue est enlevée.</li>
            </ul>
            <p><strong>📂 Autres</strong></p>
            <ul>
                <li>La tenue de service est obligatoire, tout comme l’utilisation d’un véhicule approprié et sérigraphié EMS.</li>
            </ul>
        </div>
    </section>
    <section id="autre" class="anchor-target content-section">
        <img src="assets/img/autre.jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong>📋 | Autre</strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>🍔 Restaurant/LTD</strong></p>
            <ul>
                <li>Il est interdit de se servir dans le coffre de l’entreprise pour sa consommation personnelle en dehors <br>d’un accord préalable avec la direction de l’entreprise.</li>
            </ul>
            <p><strong>🎊 Événementiel</strong></p>
            <ul>
                <li>Il est interdit de se servir dans le coffre de l’entreprise pour sa consommation personnelle en dehors <br>d’un accord préalable avec la direction de l’entreprise.</li>
            </ul>
            <p><strong>🚜 Farm</strong></p>
            <ul>
                <li>Elle peut s’obtenir via la boutique.</li>
                <li>Cette dernière est considérée comme un achat boutique et restera la propriété de son acheteur même en cas de wipe ou mort RP.</li>
                <li>Le nombre d’employés maximal est de 30 personnes.</li>
            </ul>
            <div class="alert-box">
                <span class="alert-icon"></span>
                <span class="alert-text">
                    <strong>En cas d'absence prolongée sans avis préalable, l'entreprise sera mise sous dossier ou supprimée.</strong>
                </span>
            </div>
        </div>
    </section>
    <section id="coins" class="anchor-target content-section">
        <img src="assets/img/neva-enhanced.png" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong>💰 | Coins</strong></h2>
        </div>
        <div class="parareglementhrp">
            <p>En cliquant sur "Coins" et après avoir choisi ce qui vous convient, une page s'ouvrira où vous devrez vous connecter à votre compte CFX.</p>
            <ul>
                <li>Connectez-vous à votre compte CFX pour accéder à la page des coins.</li>
                <li>Suivez les instructions à l'écran pour sélectionner et acheter les coins souhaités.</li>
            </ul>
            <div class="screenshot-container">
                <img src="assets/img/Capture d'écran 2024-06-13 163214.png" alt="Coins Page" class="screenshot">
            </div>
            <p>Ensuite, votre ID boutique vous sera demandé. Vous pourrez le retrouver ici :</p>
            <div class="screenshot-container">
                <img src="assets/img/Capture d'écran 2024-06-13 163301.png" alt="ID Boutique" class="screenshot">
            </div>
            <ul>
                <li>Faite F1 en jeu pour trouver votre ID boutique.</li>
                <li>Notez votre ID boutique pour le saisir lors de l'achat de coins.</li>
            </ul>
            <p>Il ne vous reste plus qu'à patienter une dizaine de minutes pour recevoir vos coins.</p>
            <ul>
                <li>Si vous ne recevez pas vos coins d'ici les 10 prochaines minutes, veuillez créer un ticket sur notre <a href="https://discord.gg/nevarp" target="_blank">discord</a>.</li>
                <li>Un membre de notre équipe vous assistera pour résoudre le problème rapidement.</li>
            </ul>
        </div>
    </section>
    <section id="signalez-un-bug" class="anchor-target content-section">
        <img src="assets/img/bug(1).jpg" alt="Image Description" class="reglement-image">
        <div class="titrereglement">
            <h2><strong>🐞 | Signalez un Bug</strong></h2>
        </div>
        <div class="parareglementhrp">
            <p><strong>Instructions pour signaler un bug :</strong></p>
            <ul>
                <li>Avant de signaler un bug, assurez-vous que le problème n'a pas déjà été signalé par un autre joueur.</li>
                <li>Essayez de reproduire le bug pour confirmer son existence et notez les étapes exactes.</li>
                <li>Fournissez autant de détails que possible : captures d'écran, vidéos, messages d'erreur, etc.</li>
                <li>Indiquez votre nom d'utilisateur et toute autre information pertinente.</li>
                <li>Décrivez l'impact du bug sur le jeu et si d'autres joueurs en sont affectés.</li>
                <li>Spécifiez la date et l'heure à laquelle le bug est survenu.</li>
                <li>Indiquez la plateforme (PC, console, etc.) et la version du jeu que vous utilisez.</li>
                <li>Si possible, mentionnez toute tentative de correction que vous avez essayée.</li>
                <li>N'oubliez pas de rester courtois et précis dans votre description pour faciliter le travail des développeurs.</li>
            </ul>
            <p>Pour signaler un bug, rendez-vous sur notre <a href="https://discord.gg/nevarp" target="_blank">Discord</a> et créez un ticket ou rendez vous sur le channel 🔧』bug-serveur.</p>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6Hty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/check_server.js"></script>
        <script src="assets/js/frontend-opt.js" type="text/javascript"></script>
        <script>
            function toggleMenu() {
                var menu = document.getElementById('fixed-container');

                if (menu.classList.contains('active')) {
                    menu.animate([{
                            maxHeight: '500px',
                            opacity: 1
                        },
                        {
                            maxHeight: '0',
                            opacity: 0
                        }
                    ], {
                        duration: 500,
                        easing: 'ease-in-out'
                    }).onfinish = function() {
                        menu.classList.remove('active');
                    };
                } else {
                    menu.classList.add('active');
                    menu.animate([{
                            maxHeight: '0',
                            opacity: 0
                        },
                        {
                            maxHeight: '500px',
                            opacity: 1
                        }
                    ], {
                        duration: 500,
                        easing: 'ease-in-out'
                    });
                }
            }

            // Fonction pour le défilement fluide
            document.getElementById('goto-reglement').addEventListener('click', function(event) {
                event.preventDefault();
                var targetId = this.getAttribute('href').split('#')[1];
                var targetElement = document.getElementById(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        </script>
</body>

</html>
