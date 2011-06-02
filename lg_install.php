<?php
/**
 * Fire-Soft-Board version 2
 * 
 * @package FSB2
 * @author Genova <genova@fire-soft-board.com>
 * @version $Id$
 * @license http://opensource.org/licenses/gpl-2.0.php GNU GPL 2
 */

return (array (
  'install_welcome' => 'Merci d\'avoir choisi FSB (Fire Soft Board) comme solution de forums. Nous allons procéder étape par étape à l\'installation de votre forum. En cas de problème vous trouverez du support (gratuit) sur notre site officiel: <a href="http://www.fire-soft-board.com">http://www.fire-soft-board.com</a>',
  'step1' => 'Accueil',
  'step2' => 'Fichiers',
  'step3' => 'Base de données',
  'step4' => 'Compte admin',
  'step5' => 'Configuration',
  'step6' => 'Fin',
  'install_yes' => 'Oui',
  'install_no' => 'Non',
  'install_home' => 'Accueil',
  'install_process' => 'Assurez-vous d\'avoir correctement uploadé les fichiers sur votre serveur et d\'utiliser la dernière version du forum (en téléchargement sur notre site).<br/><br/>Vous devez nécessairement posséder vos accès à votre base de données pour pouvoir installer votre forum (sauf si vous utilisez une base de données SQLite).<br/>A savoir que ces accès vous ont été donnés par votre hébergeur.<br/><br/>Pour être installé, FSB 2 requiert la configuration suivante:<ul><li>PHP version  5</li><li>Une base de données MySQL 4.1+ (les versions avant la 4.1 ne sont pas supportées) <b>ou</b> une base SQLite <b>ou</b> une base PostgreSQL</li></ul><br />Pour débuter l\'installation du forum, veuillez cliquer sur le bouton suivant.',
  'install_next' => 'Suivant',
  'install_sgbd' => 'Type de base de données',
  'install_sgbd_explain' => 'Choisissez ici le type de base de données que vous souhaitez utiliser (et disponible sur le serveur de votre hébergeur). Si vous ne savez pas comment remplir ce champ laissez la valeur par défaut (MySQL)',
  'install_information' => 'Informations',
  'install_sgbd_connect' => 'Connexion à la base de données',
  'install_sgbd_connect_explain' => 'Vous devez entrer ici les identifiants de connexion à votre base de données. Ces identifiants vous ont été fournis par votre hébergeur. Si ce n\'est pas le cas veuillez consultez la FAQ (Foire Aux Questions) de celui-ci pour vous renseigner à ce sujet, ou bien contactez le support de votre hébergeur.',
  'install_sql_error' => 'Erreur de connexion à la base de données: %s',
  'install_admin' => 'Création du compte administrateur',
  'install_sql_prefix' => 'Préfixe des tables',
  'install_sql_dbms' => 'Type de base de données',
  'install_sql_server' => 'Adresse du serveur',
  'install_sql_login' => 'Login de connexion',
  'install_sql_password' => 'Mot de passe de connexion',
  'install_sql_dbname' => 'Nom de la base de données',
  'install_sql_port' => 'Port de connexion (facultatif)',
  'install_sql_nosgbd'	=> 'Votre installation de PHP ne supporte aucun des systèmes de base de données supportés par FSB2',
  'install_admin_login' => 'Login de connexion',
  'install_admin_nickname' => 'Pseudonyme',
  'install_admin_nickname_explain' => 'Votre pseudonyme sur le forum. Si ce champ est vide il prendra la valeur du champ login',
  'install_admin_password' => 'Mot de passe',
  'install_admin_password_confirm' => 'Confirmer le mot de passe',
  'install_admin_email' => 'Adresse email',
  'install_end' => 'Félicitations, le forum a été correctement installé. Vous pouvez cliquer sur le bouton ci-dessous pour vous connecter dès à présent avec vos identifiants.',
  'install_go_forum' => 'Aller sur le forum',
  'install_write_config' => 'FSB n\'a pas pu générer le fichier de configuration de votre forum (indispensable pour le fonctionnement). Vous pouvez générer ce fichier vous-même en créant un fichier nommé config.php dans le répertoire ~/config/ de votre forum, et en y mettant le code suivant:',
  'install_chmod_title' => 'Liste des fichiers à CHMODer',
  'install_chmod_explain' => 'Cette étape est facultative, cependant il est conseillé de la suivre afin que votre forum soit 100% opérationnel. Le CHMOD correspond aux droits de vos fichiers sur votre serveur web. Si par exemple le dossier ~/images/avatars/ n\'est pas inscriptible, alors vos membres ne pourront pas uploader d\'avatars. Le CHMOD n\'est donc pas obligatoire, vous pouvez vous passer de ces fonctions, mais ce serait dommage. D\'autant plus que la plupart de ces fonctions permettent une accélération de l\'affichage du forum.<br /><br />Pour CHMODer vos fichiers, il vous suffit de cliquer sur "CHMODer les fichiers" en bas de la page. Il est conseillé de renseigner vos identifiants FTP pour cette opération afin d\'être sûr du résultat. Les renseigner reste facultatif, mais suivant votre hébergeur il y a de grandes chances que le CHMOD ne fonctionne pas sans ces identifiants. Si l\'opération de CHMOD échoue, vous pouvez aussi le faire manuellement en vous connectant à votre FTP depuis votre client FTP, et en CHMODant les fichiers (clic droit sur le fichier, CHMOD 777). A noter que sur l\'hébergeur <b>Free</b> l\'étape des CHMOD n\'est pas indispensable, même si ce dernier vous dit que les fichiers ne sont pas inscriptibles, le forum marchera tout de même bel et bien.<br /><b>Une fois le CHMOD des fichiers correctement effectué vous pouvez appuyer sur suivant.</b>',
  'install_chmod_ftp_explain' => 'Vous n\'êtes pas obligé d\'entrer vos identifiants FTP pour CHMODer vos fichiers, cependant si vous ne le faîtes pas le risque d\'échec du CHMOD est très probable.',
  'install_chmod_submit' => 'CHMODer les fichiers',
  'install_chmod_ftp' => 'Vos identifiants FTP',
  'install_ftp_host' => 'Adresse du serveur FTP',
  'install_ftp_login' => 'Login de connexion',
  'install_ftp_password' => 'Mot de passe',
  'install_ftp_port' => 'Port de connexion',
  'install_ftp_path' => 'Chemin du forum',
  'install_ftp_path_explain' => 'Entrez ici le chemin pour accéder à votre forum depuis la racine de votre FTP (lors de la connexion). Par exemple si en vous connectant à votre FTP votre forum se situe dans un répertoire <b>forum/</b>, entrez dans ce champ la valeur <b>forum/</b>.',
  'install_chmod_config' => '(Important) Contient les identifiants de votre base de données',
  'install_chmod_langs' => 'Permet l\'installation de nouvelles langues',
  'install_chmod_tpl' => 'Permet l\'installation de nouveaux thèmes',
  'install_chmod_cache_tpl' => 'Accélère votre forum en gardant en cache les fichiers templates de vos thèmes',
  'install_chmod_cache_sql' => 'Accélère votre forum en réduisant les accès au serveur SQL',
  'install_chmod_cache_xml' => 'Accélère votre forum en gardant en cache les fichiers XML parsés',
  'install_chmod_avatars' => 'Permet aux membres d\'uploader des avatars',
  'install_chmod_ranks' => 'Vous permet d\'uploader de nouveaux rangs sur le forum',
  'install_chmod_smilies' => 'Vous permet d\'uploader de nouveaux smilies sur le forum',
  'install_chmod_upload' => 'Vous permet d\'uploader des fichiers joints dans vos messages',
  'install_chmod_save' => 'Vous permet de faire des backups des fichiers de votre forum à chaque installation d\'un module',
  'install_chmod_adm_tpl' => 'Vous permet d\'accélérer l\'affichage du thème de l\'administration',
  'install_chmod_sql_back' => 'Vous permet de stocker sur votre FTP des backups de votre base de données.',
  'install_chmod_cache_diff' => 'Accélère votre forum en gardant en cache les calculs de différences entre vos thèmes',
  'install_bad_password' => 'Les deux mots de passe entrés sont différents',
  'install_bad_login' => 'Veuillez entrer un login',
  'install_config_forum' => 'Configuration du forum',
  'install_config_forum_explain' => 'Cette page liste quelques configurations système importantes pour votre forum. Si vous ne souhaitez pas vous préoccuper de ces détails, vous pouvez directement passer à la fin de l\'installation du forum en cliquant sur le bouton ci-dessous.',
  'install_config_email' => 'Email du forum',
  'install_config_email_explain' => 'Cette adresse email sera considérée comme l\'adresse du compte administrateur du forum. Il est conseillé d\'entrer une adresse email valide, afin qu\'en cas de problèmes ou d\'erreurs vos membres puissent vous contacter.',
  'install_config_path' => 'Chemin d\'accès du forum',
  'install_config_path_explain' => 'Entrez ici l\'adresse d\'accès à votre forum (sans le / final). Il est très important d\'entrer l\'URL correcte du forum, car celle ci sera utilisée dans de nombreux endroits du forum, notamment dans les emails ou les confirmations d\'inscription. Si l\'adresse par défaut est correcte, laissez la tel quel.',
  'install_config_cookie' => 'Nom du cookie',
  'install_config_cookie_explain' => 'Si vous avez installé plusieurs forums FSB2 sur le même nom de domaine, il est recommandé de changer le nom du cookie pour ce forum afin de ne pas entrer en conflit avec les autres.',
  'install_config_search' => 'Algorithme de recherche',
  'install_config_search_explain' => 'Le forum va sélectionner pour vous le meilleur algorithme à utiliser pour vos recherches. Si vous utilisez MySQL 4.1+ il est recommandé d\'utiliser l\'algorithme <b>Fulltext MySQL</b>. Si vous utilisez un autre type de base de données, ou que votre version de MySQL ne le permet pas, vous pouvez choisir un des deux autres algorithmes.<br />L\'algorithme <b>Fulltext FSB</b> est prévu pour les forums qui deviendront conséquents, et restera performant même si vous avez un nombre important de messages.<br />L\'algorithme <b>LIKE</b> est prévu pour les petits forums qui auront peu de messages (moins de 10 000 messages).',
  'install_config_search_fulltext_fsb' => 'Fulltext FSB',
  'install_config_search_fulltext_mysql' => 'Fulltext MySQL',
  'install_config_search_like' => 'LIKE',
  'install_config_menu' => 'Sécurité du panneau d\'administration',
  'install_config_menu_webftp' => 'Accès au webFTP',
  'install_config_menu_webftp_explain' => 'Permet la modification en ligne des fichiers du forum.',
  'install_config_menu_sql' => 'Accès au gestionnaire de base de données',
  'install_config_menu_sql_explain' => 'Permet l\'exécution de requêtes SQL sur la base de données du forum.',
  'install_config_menu_admin' => 'Accès pour les administrateurs et le fondateur',
  'install_config_menu_fondator' => 'Accès pour le fondateur uniquement',
  'install_utc' => 'Fuseau horaire du forum',
  'install_utc_dst' => 'Décalage horaire du forum',
  'install_config_rewriting' => 'Utiliser l\'URL rewriting',
  'install_bad_mysql_version' => 'FSB2 n\'est pas compatible avec la version de MySQL que vous utilisez (%s). FSB2 requiert au minimum MySQL 4.1.',
  'install_config_rewriting_explain' => 'Si vous souhaitez installer l\'URL rewriting sur votre forum (nécessite un serveur APACHE avec le MOD pour la réécriture d\'URL), vous devrez aussi copier le fichier <b>~/programms/REWRITE_HTACCESS</b> à la racine de votre forum, en renommant ce fichier en <b>.HTACCESS</b>.<br /><b>Attention</b>, ne touchez pas à cette partie si vous ne savez pas ce que vous faites !',
  'file_cant_chmod' => 'Impossible de chmoder le fichier <strong>%s</strong>',
  'file_cant_connect_server' => 'Impossible de se connecter au serveur <strong>%s</strong>, sur le port <strong>%s</strong>',
  'file_cant_authentificate' => 'Impossible de s\'authentifier avec le login <strong>%s</strong>',
  'file_cant_chdir' => 'Impossible de changer de répertoire vers <strong>%s</strong>',
  'file_fsockopen_disabled' => 'La fonction fsockopen() a été désactivée, impossible de se connecter au serveur de fichiers',
  'file_ftp_extension_disabled' => 'L\'extension FTP de PHP n\'est pas activée, impossible de se connecter au serveur de fichiers',
  'file_cant_mkdir' => 'Impossible de créer le dossier <strong>%s</strong>',
  'file_cant_remove_dir' => 'Impossible de supprimer le répertoire <strong>%s</strong>',
  'file_cant_create_tmp' => 'Impossible de créer un fichier temporaire',
  'file_cant_put_file' => 'Impossible de copier le fichier <strong>%s</strong> vers <strong>%s</strong>',
  'install_quick' => 'Installation rapide',
  'install_quick_explain' => 'Cette option est disponible car vous êtes actuellement sur votre serveur local (localhost). En utilisant l\'installation rapide, le forum sera directement installé sous MySQL avec le compte root (sans mot de passe). Un login / mot de passe par défaut sera créé: admin / admin. Cette option permet ainsi de faire des tests rapidement.',
  'convertors' => 'Scripts de conversion',
  'convertors_explain' => 'Les scripts de conversion permettent de mettre à jour votre ancien forum vers FSB2, pour peu que votre type de forum soit supporté par les scripts de conversion. Vous pouvez consulter la liste des type de forums supportés ci dessous.',
  'convert_welcome' => 'Bienvenue sur le script de conversion du forum "%s". Veuillez suivre les instructions ci dessous afin de convertir les données de votre ancien forum vers FSB2.',
  'convert_form' => 'Configuration du script de conversion',
  'convert_output' => 'Destination des requêtes SQL',
  'convert_output_file' => 'Les requêtes seront écrites dans le fichier ~/install/export.sql (<b>Il doit-être accessible en écriture</b>)',
  'convert_output_db' => 'Les requêtes seront directement executées',
  'convert_output_print' => 'Les requêtes seront affichées',
  'convert_explain_sql' => 'Renseignez ci dessous les paramètres de connexion à la base de donnée du forum que vous voullez convertir.',
  'convert_additional_conf' => 'ConfiguratioVotre installation de PHP ne supporte aucun des systèmes de base de données supportés par FSB2n suplémentaire',
  'convert_conf_forum_path' => 'Chemin vers le forum',
  'convert_conf_forum_path_explain' => 'Entrez le chemin vers le forum à convertir depuis la racine de votre forum FSB2. Si par exemple sur votre serveur votre forum FSB2 se situe dans le répertoire fsb2/ et votre forum à convertir dans le répertoire forum/ entrez dans ce champ ../forum/ car vous êtes dans fsb2/',
  'convert_information' => 'Pour démarrer la conversion, rendez vous sur la page "configuration" dans le menu de gauche.<br /><br /><b>Informations importantes :</b> une fois la conversion terminée, rendez vous dans l\'administration de votre forum, dans l\'onglet <b>optimisations</b> puis <b>procédures</b> et lancez la procédure de resynchronisation des derniers sujets des forums.',
  'convert_menu_index' => 'Index du script',
  'convert_menu_forums' => 'Forums',
  'convert_menu_auths' => 'Autorisations',
  'convert_menu_topics' => 'Sujets',
  'convert_menu_posts' => 'Messages',
  'convert_menu_users' => 'Membres',
  'convert_menu_groups' => 'Groupes',
  'convert_menu_polls' => 'Sondages',
  'convert_menu_bans' => 'Bannissements',
  'convert_menu_mp' => 'Messages privés',
  'convert_menu_config' => 'Configuration',
  'convert_menu_ranks' => 'Rangs',
  'convert_menu_copy' => 'Copie des images',
  'convert_file_not_exists' => 'Le fichier "%s" n\'existe pas',
  'convert_sql_connexion_error' => 'Impossible de se connecter à la base de donnée',
  'convert_output_queries' => 'Affichage des requêtes',
  'convert_refresh' => 'Rafraichir la page',
  'convert_refresh_explain' => 'Si vous n\'êtes pas automatiquement redirigé dans 3 secondes, veuillez cliquer sur le lien ci dessous.',
  'convert_step_users' => 'Nombre de membres à convertir par étape',
  'convert_step_topics' => 'Nombre de sujets à convertir par étape',
  'convert_step_posts' => 'Nombre de messages à convertir par étape',
  'convert_progress' => 'Requêtes exécutées : %d / %d (%s %%)',
  'convert_next_page' => 'Passer à l\'étape suivante',
  'convert_done' => 'La conversion de votre forum est terminée. N\'oubliez pas de lancer les procédures pour resyncroniser votre configuration et les derniers sujets des forums, dans administration -> optimisations -> procédures sur votre forum FSB2.',
));


/* EOF */
