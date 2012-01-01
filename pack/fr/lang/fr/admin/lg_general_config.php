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
	'general_config_explain_title' => 'Panneau de configuration',
	'general_config_explain_desc' => 'Vous pouvez configurer ici les options générales de votre forum (son nom, thème par défaut, etc ...).',
	'adm_config_general' => 'Général',
	'adm_config_forum_name' => 'Nom du forum',
	'adm_config_forum_description' => 'Description du forum',
	'adm_config_default_tpl' => 'Thème par défaut',
	'adm_config_override_tpl' => 'Imposer le template par défaut',
	'adm_config_default_lang' => 'Langue par défaut',
	'adm_config_override_lang' => 'Imposer la langue par défaut',
	'adm_config_forum_mail' => 'Adresse email du forum',
	'adm_config_log' => 'Logs',
	'adm_config_use_gzip' => 'Compression GZIP des pages',
	'adm_config_use_gzip_explain' => 'La compression GZIP permet d\'accélérer l\'affichage des pages du forum en les compressant.',
	'adm_config_avatar' => 'Avatars',
	'adm_config_avatar_explain' => 'Les avatars uploadés seront stockés dans le dossier AVATAR_PATH de votre forum. Si vous autorisez cette fonction soyez sur d\'avoir suffisamment d\'espace disque.',
	'adm_config_avatar_can_use' => 'Autoriser les avatars',
	'adm_config_avatar_can_upload' => 'Uploader des avatars',
	'adm_config_avatar_can_use_gallery' => 'Activer la galerie d\'avatars',
	'adm_config_avatar_can_use_gallery_explain' => 'Vous devez créer vous-même la galerie. Renseignez vous sur la FAQ administration pour plus de détails.',
	'adm_config_avatar_can_same' => 'Autoriser deux membres à prendre le même avatar dans la galerie',
	'adm_config_avatar_width' => 'Largeur maximale de l\'avatar',
	'adm_config_avatar_width_explain' => 'Taille exprimée en pixels (px)',
	'adm_config_avatar_height' => 'Longueur maximale de l\'avatar',
	'adm_config_avatar_height_explain' => 'Taille exprimée en pixels (px)',
	'adm_config_avatar_weight' => 'Poids maximal de l\'avatar',
	'adm_config_avatar_weight_explain' => 'Ce poids est exprimé en octets. Un 1 Kibi octet vaut 1024 octets.',
	'adm_config_mp' => 'Messagerie privée',
	'adm_config_mp_explain' => 'Le quota de MP définit le nombre maximum de messages privés qu\'un membre peut avoir dans une de ses boîtes. Cette limite est faite pour éviter que les messages privés encombrent trop la base de données. Les administrateurs ne sont pas affectés par ces quotas.',
	'adm_config_mp_max_inbox' => 'Quota de MP dans la boîte de réception',
	'adm_config_mp_max_outbox' => 'Quota de MP dans la boîte d\'envoi',
	'adm_config_mp_max_savebox' => 'Quota de MP dans la boîte d\'archive',
	'adm_config_post' => 'Messages',
	'adm_config_topic_per_page' => 'Nombre de sujets par page dans les forums',
	'adm_config_post_per_page' => 'Nombre de messages par page dans les sujets',
	'adm_config_flood_post' => 'Limite de flood dans les sujets',
	'adm_config_flood_post_explain' => 'Nombres de secondes à attendre pour qu\'un membre puisse à nouveau poster un message / sujet sur le forum.',
	'adm_config_post_min_length' => 'Nombre de caractères minimum dans un message',
	'adm_config_mail' => 'Emails',
	'adm_config_email_explain' => 'Si votre serveur est sous Windows renseignez ces identifiants pour le serveur SMTP.',
	'adm_config_forum_sig' => 'Signature sur les emails',
	'adm_config_use_smtp' => 'Utiliser un serveur SMTP',
	'adm_config_smtp_host' => 'Adresse du serveur SMTP',
	'adm_config_smtp_host_explain' => 'Vous pouvez spécifier le port pour le serveur de cette façon: smtp.server.com:25 pour préciser le port 25. Vous pouvez entrer plusieurs serveurs, en les séparant par un caractère ;',
	'adm_config_smtp_username' => 'Login du serveur SMTP',
	'adm_config_smtp_password' => 'Mot de passe du serveur SMTP',
	'adm_config_register_type' => 'Confirmation d\'inscription',
	'adm_config_register_type_explain' => 'En choisissant une confirmation d\'inscription par email, les nouveaux utilisateurs devront cliquer sur un lien reçu par email pour activer leur compte. En choisissant une confirmation d\'inscription par administrateurs, ces derniers devront activer manuellement les nouveaux comptes sur le forum. Vous pouvez aussi combiner les deux dernières méthodes.',
	'adm_config_system' => 'Système',
	'adm_config_ftp' => 'FTP',
	'adm_config_ftp_explain' => 'Utiliser une connexion FTP permet de manipuler de façon fiable les fichiers du forum, et ainsi permet l\'installation à coup sur de modules, thèmes, langues, etc... Entrez ici vos identifiants FTP.',
	'adm_config_ftp_default' => 'Utiliser ces identifiants FTP par défaut sur le forum',
	'adm_config_ftp_host' => 'Adresse du serveur FTP',
	'adm_config_ftp_login' => 'Login de connexion FTP',
	'adm_config_ftp_password' => 'Mot de passe de connexion FTP',
	'adm_config_ftp_port' => 'Port du serveur FTP',
	'adm_config_ftp_path' => 'Répertoire du forum sur le serveur FTP',
	'adm_config_cookie' => 'Cookies',
	'adm_config_cookie_explain' => 'Ne changez pas ces paramètres si vous n\'êtes pas sur de ce que vous faîtes. Si vous avez plusieurs forums sur le même espace web, modifiez le nom du cookie pour chaque forum.',
	'adm_config_cookie_name' => 'Préfixe du cookie',
	'adm_config_cookie_path' => 'Chemin du cookie',
	'adm_config_cookie_dommain' => 'Domaine du cookie',
	'adm_config_cookie_secure' => 'Sécuriser le cookie',
	'adm_config_well_submit' => 'La configuration a bien été mise à jour',
	'adm_config_profile' => 'Profil',
	'adm_config_activate_fsbcode' => 'Activer les FSBcodes sur l\'ensemble du forum',
	'adm_config_activate_img' => 'Activer les images sur l\'ensemble du forum',
	'adm_config_activate_sig_fsbcode' => 'Activer les FSBcodes dans les signatures',
	'adm_config_activate_sig_img' => 'Activer les images dans les signatures',
	'adm_config_activate_censor' => 'Activer la censure sur l\'ensemble du forum',
	'adm_config_auser' => 'Membres',
	'adm_config_upload_quota' => 'Quota d\'upload de fichiers joints par membres',
	'adm_config_upload_quota_explain' => 'Ce poids est exprimé en octets. Un 1 Kibi octet vaut 1024 octets. Vous pouvez déterminer les niveaux d\'utilisateurs ayant un quota d\'upload infini dans la gestion des droits.',
	'adm_config_user_edit_nickname' => 'Le membre peut modifier son pseudonyme',
	'adm_config_sig_max_chars' => 'Maximum de caractères dans les signatures',
	'adm_config_sig_max_line' => 'Maximum de lignes dans les signatures',
	'adm_config_upload_extensions' => 'Extensions possibles pour l\'upload',
	'adm_config_upload_extensions_explain' => 'Séparez chaque extension d\'une virgule. <b>Attention</b>, n\'ajoutez surtout pas d\'extensions dangereuses tel que PHP.',
	'adm_config_check_email_dns' => 'Vérifier le serveur DNS des adresses email',
	'adm_config_check_email_dns_explain' => 'Lorsqu\'un membre s\'inscrit ou change son adresse email, le forum tentera de vérifier si le serveur de cette adresse email existe afin d\'éviter les adresses email erronées.',
	'adm_config_activate_sig' => 'Activer les signatures sur le forum',
	'adm_config_disable_board' => 'Désactivation du forum',
	'adm_config_disable_board_explain' => 'La désactivation du forum est utile lorsque vous souhaitez mettre à jour votre forum, afin que vos visiteurs ne tombent pas sur un forum en pleine reconstruction.',
	'disable_board_none' => 'Le forum n\'est pas désactivé',
	'disable_board_modo' => 'Le forum n\'est pas désactivé pour les modérateurs / administrateurs',
	'disable_board_admin' => 'Le forum est désactivé pour tout le monde, sauf les administrateurs',
	'adm_config_disable_board_message' => 'Raison de la désactivation du forum',
	'adm_config_sig_max_height' => 'Hauteur maximale de la signature',
	'adm_config_sig_max_height_explain' => 'Taille exprimée en pixels (px). Permet de limiter les tailles de signatures, en cachant les parties dépassant les dimensions maximales. Cette fonction ne marchera cependant pas pour les utilisateurs d\'Internet Explorer 7 et moins',
	'adm_config_mp_allow_multiple' => 'Autoriser les envois multiples',
	'adm_config_mp_allow_multiple_explain' => 'Permet d\'envoyer des messages privés à plusieurs personnes en même temps.',
	'adm_config_upload' => 'Fichiers joints',
	'adm_config_upload_max_filesize' => 'Taille maximale du fichier joint',
	'adm_config_upload_max_filesize_explain' => 'Ce poids est exprimé en octets. Un 1 Kibi octet vaut 1024 octets.',
	'adm_config_default_utc' => 'Fuseau horaire par défaut du forum',
	'adm_config_default_utc_dst' => 'Décalage horaire par défaut du forum',
	'adm_config_nickname_chars' => 'Caractères autorisés dans les pseudonymes',
	'adm_config_nickname_chars_low' => 'Tous les caractères sont autorisés',
	'adm_config_nickname_chars_middle' => 'Seuls les caractères alpha numériques, espaces et tirets sont autorisés',
	'adm_config_nickname_chars_high' => 'Seuls les lettres et les espaces sont autorisés',
	'adm_config_calendar' => 'Calendrier',
	'adm_config_calendar_activated' => 'Activer le calendrier sur le forum',
	'adm_config_calendar_next_events' => 'Afficher les X prochains événements sur l\'index',
	'adm_config_calendar_next_events_explain' => 'Entrez dans ce champ le nombre de prochains événements que vous souhaitez voir apparaître dans la liste des prochains événements sur l\'index. Entrez 0 pour cacher cette option sur l\'index.',
	'adm_config_calendar_date_events' => 'Afficher les événements des X prochains jours sur l\'index.',
	'adm_config_calendar_date_events_explain' => 'Entrez dans ce champ un nombre de jours. Entrez 0 pour cacher cette option sur l\'index.',
	'adm_config_calendar_birthday_activate' => 'Activer les anniversaires sur le calendrier',
	'adm_config_calendar_birthday_required_posts' => 'Nombre de messages pour l\'anniversaire',
	'adm_config_calendar_birthday_required_posts_explain' => 'Détermine le nombre de messages qu\'un membre doit avoir posté pour pouvoir faire apparaitre son anniversaire sur le calendrier',
	'adm_config_delete_only_last_post' => 'Imposer la suppression du dernier message',
	'adm_config_delete_only_last_post_explain' => 'En mettant cette option sur "oui", les membres ne pourront supprimer leur message que si celui ci est le dernier message du sujet (pour plus de cohérence).',
	'adm_config_sig' => 'Signatures',
	'adm_config_rss_caching' => 'Durée de mise en cache des flux RSS (en heures)',
	'adm_config_fsb_path' => 'Adresse du forum',
	'adm_config_fsb_path_explain' => 'Entrez ici l\'URL de votre forum, sans le / final. Par exemple http://votredomaine.com/forum.',
	'adm_config_activate_html' => 'Activer le HTML dans les messages',
	'adm_config_activate_html_explain' => 'Cette option ne sera accessible qu\'aux modérateurs globaux / administrateurs. Soyez sûr de ce que vous faites avant de l\'activer.',
	'adm_config_network' => 'Réseau',
	'adm_config_use_fsockopen' => 'Activer les connexions réseaux',
	'adm_config_use_fsockopen_explain' => 'Certaines fonctions de FSB comme la vérification de la nouvelle version du forum, ou la vérification de la version des MODS nécessitent une connexion réseau depuis votre forum. Si le serveur de votre forum est derrière un serveur proxy qu\'il ne peut pas passer, ces fonctions risquent de ralentir le chargement de certaines pages. Aussi il est conseillé de les désactiver dans ce cas là, via cette option.',
));


/* EOF */
