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
	'mods_manager_explain_title' => 'Gestion des modules et fonctionnalités du forum',
	'mods_manager_explain_desc' => 'Sur cette page vous pouvez activer / désactiver plusieurs fonctions facultatives pour votre forum. Certaines fonctions prenant davantage de ressources que d\'autres, nous vous suggérons de désactiver les fonctions qui ne vous serviront pas. Vous pouvez aussi télécharger des modules sur notre site WEB, et les installer via l\'installeur de module. A chaque module installé, une sauvegarde des fichiers modifiés est faite. Vous pouvez récupérer cette sauvegarde dans l\'onglet backup.',
	'adm_mods_menu_functions' => 'Fonctions du forum',
	'adm_mods_menu_mods' => 'MODS installés',
	'adm_mods_menu_install' => 'Installation',
	'adm_mods_menu_streaming' => 'Streaming',
	'adm_mods_menu_backup' => 'Backup',
	'adm_mods_backup_list' => 'Liste des backups des MODS',
	'adm_mods_filename' => 'Nom du fichier',
	'adm_mods_compress' => 'Type de compression',
	'adm_mods_date' => 'Date du backup',
	'adm_mods_restore' => 'Restauration',
	'adm_mods_backup_confirm' => 'Etes-vous sur de vouloir restaurer ces fichiers ? (Les anciens fichiers seront écrasés)',
	'adm_mods_backup_success' => 'Les fichiers ont été correctement restaurés',
	'adm_mods_see_install' => 'Voir le fichier d\'installation',
	'adm_mods_list' => 'Liste des MODS dans le répertoire %s',
	'adm_mods_uninstall_confirm' => 'Etes-vous sur de vouloir désinstaller le MOD <i>%s</i> ?<br /><br />Un backup des fichiers éventuellements modifiés par la désinstallation sera fait. Suivant le fichier de désinstallation du MOD, des requêtes SQL pourront être exécutées pour supprimer les traces du MOD dans la base de donnée. N\'hésitez pas à faire un backup de votre base de donnée depuis le gestionaire de base de donnée dans l\'administration du forum, ou depuis phpMyAdmin.',
	'adm_mods_uninstall_success' => 'Le module a bien été désinstallé',
	'adm_mods_install' => 'Installer',
	'adm_mods_uninstall' => 'Désinstaller',
	'adm_mods_data' => 'Voir la fiche du MOD',
	'adm_mods_name' => 'Nom du MOD',
	'adm_mods_version' => 'Version',
	'adm_mods_description' => 'Description',
	'adm_mods_author' => 'Auteur',
	'adm_mods_author_email' => 'Email de l\'auteur',
	'adm_mods_author_website' => 'Site web de l\'auteur',
	'adm_mods_is_update' => 'MAJ',
	'adm_mods_is_update_explain' => 'Ceci est une mise à jour du MOD %s',
	'adm_mods_file_open' => 'Nombre de fichiers modifiés',
	'adm_mods_file_joined' => 'Nombre de fichiers joints',
	'adm_mods_sql' => 'Requêtes SQL',
	'adm_mods_cache' => 'Requêtes cache',
	'adm_mods_note' => 'Notes',
	'adm_mods_is_installed' => 'Le module est déjà installé. Si vous souhaitez tout de même le réinstaller veuillez lancer cette requête dans l\'onglet cache: <br />%s',
	'adm_mods_install_duplicat' => 'Installer le module sur tous les thèmes / langues',
	'adm_mods_install_duplicat_explain' => 'En activant cette option l\'installeur de modules tentera d\'installer le module dans chaque langue / thème supplémentaire que vous avez ajouté au forum. Cependant, il se peut que certains thèmes soient incompatibles avec le module, si cela se produit il ne pourra être installé. Il vous suffit dans ce cas précis de mettre cette option sur "non", de relancer l\'installation du MOD, et d\'installer manuellement dans les thèmes les instructions restantes.',
	'adm_mods_install_sql' => 'Exécuter directement les requêtes',
	'adm_mods_install_sql_explain' => 'En activant cette option les requêtes SQL dans le MOD seront automatiquement exécutées lors de l\'installation',
	'adm_mods_install_file' => 'Exécuter directement les fichiers PHP',
	'adm_mods_install_file_explain' => 'En activant cette option les fichiers PHP nécessitant d\'être exécutés une fois l\'installation du MOD terminée, seront appelés automatiquement durant l\'installation du MOD',
	'adm_mods_install_care' => '<b>Attention</b> : l\'installation d\'un module va modifier automatiquement les fichiers de votre forum. Aussi il est conseillé de tester au préalable sur un forum installé en local si tout se passera bien. Un backup automatique des fichiers modifiés par le module sera fait pendant l\'installation (vous pouvez restaurer vos fichiers datant de juste avant l\'installation du module via l\'onglet backup).',
	'module_log_error' => 'Log d\'erreur de l\'installation du module',
	'module_log_error_pre' => 'Log d\'erreur de la préinstallation du module',
	'module_no_report_pre' => 'Aucune erreur durant la préinstallation',
	'module_report_pre' => 'Des erreurs ont été recensées durant la pré-installation du module, le module n\'a donc pas été installé afin d\'éviter toute erreur possible. L\'échec est peut être du à: <ul><li>Une incompatibilité de ce MOD avec un autre MOD déjà installé.</li><li>Une incompatibilité de ce MOD avec votre version actuelle de FSB.</li><li>Une incompatibilité de ce MOD avec un des thèmes que vous avez installé. Vous pouvez empêcher l\'installation de ce MOD sur tous vos thèmes depuis l\'écran d\'installation du MOD, afin de ne l\'installer que sur le thème WhiteSummer, pour vous laisser la possibilité de faire les modifications pour les autres thèmes manuellement.</li></ul><br />Voici la liste des erreurs rencontrées:',
	'module_no_report' => 'Aucune erreur durant l\'installation finale',
	'module_report' => 'Des erreurs ont été recensées durant l\'installation finale du module',
	'adm_mods_return' => 'Cliquez <a href="%s">ici</a> pour revenir à la liste des modules à installer',
	'module_error_1' => 'Le fichier <strong>%s</strong> n\'existe pas',
	'module_error_2' => 'Le code cherché, dans le fichier <strong>%2$s</strong> n\'a pas été trouvé:<br />%1$s',
	'module_error_3' => 'Le fichier %s n\'est pas accessible en écriture, veuillez le chmoder en 666',
	'module_error_4' => 'Erreur SQL <strong>%1$s</strong>:<br />%2$s',
	'module_error_5' => 'Le répertoire <strong>%s</strong> n\'est pas accessible en écriture, veuillez le chmoder en 777',
	'module_error_6' => 'L\'instruction <strong>%s</strong> n\'existe pas',
	'adm_mods_mods' => 'Liste des MODS installés',
	'adm_mods_activated' => 'Activer',
	'adm_mods_new_version' => 'Vous ne possédez pas la dernière version de ce MOD',
	'adm_mods_none' => 'Aucun MOD disponible',
	'adm_activation_title' => 'Activer / désactiver des fonctions du forum',
	'adm_activation_well_submit' => 'La nouvelle configuration de l\'activation des MODS a bien été soumise',
	'adm_activation_mod_mp' => 'Messagerie privée',
	'adm_activation_mod_mp_explain' => 'Permet aux membres de s\'envoyer des messages entre eux via une messagerie privée.',
	'adm_activation_mod_mp_blacklist' => 'Blacklist de membres',
	'adm_activation_mod_mp_blacklist_explain' => 'Permet aux membres d\'avoir une blacklist de personnes avec lesquelles ils ne veulent pas correspondre par MP.',
	'adm_activation_mod_mp_auto_answer' => 'Répondeur automatique',
	'adm_activation_mod_mp_auto_answer_explain' => 'Un répondeur automatique pour les MP.',
	'adm_activation_mod_online_show_birthday' => 'Anniversaires du jour',
	'adm_activation_mod_online_show_birthday_explain' => 'Affiche la boîte listant les anniversaires du jour',
	'adm_activation_mod_online_show_current' => 'Membres en ligne',
	'adm_activation_mod_online_show_current_explain' => 'Affiche la boîte listant les membres actuellement en ligne',
	'adm_activation_mod_online_show_today' => 'Membres sur le forum aujourd\'hui',
	'adm_activation_mod_online_show_today_explain' => 'Affiche la boîte listant les membres ayant visité le forum aujourd\'hui',
	'adm_activation_mod_post_map' => 'Système de MAP',
	'adm_activation_mod_post_map_explain' => 'Permet d\'utiliser des MAP pour formater le formulaire des sujets',
	'adm_activation_mod_user_birthday' => 'Date de naissance',
	'adm_activation_mod_user_birthday_explain' => 'Permet aux membres de préciser leur date de naissance, leur âge est affiché dans le profil',
	'adm_activation_mod_user_sexe' => 'Genre',
	'adm_activation_mod_user_sexe_explain' => 'Permet aux membres de préciser leur sexe, celui-ci est affiché dans le profil et les sujets',
	'adm_activation_mod_quick_reply' => 'Réponse rapide',
	'adm_activation_mod_quick_reply_explain' => 'Ajoute un formulaire de réponse en bas des sujets',
	'adm_activation_mod_update_last_visit' => 'Fonctions liées à la dernière visite',
	'adm_activation_mod_update_last_visit_explain' => 'Ajoute une requête supplémentaire par page. Cette fonction n\'apporte rien de visible mais est nécessaire pour faire fonctionner les fonctions "Membres en ligne dans les sujets", "Date de dernière visite sur l\'index", "Date de dernière visite sur le profil"',
	'adm_activation_mod_online_in_topics' => 'Membres en ligne dans les sujets',
	'adm_activation_mod_online_in_topics_explain' => 'Affiche un bouton "en ligne" ou "hors ligne" dans les messages, suivant si le posteur du message est actuellement en ligne ou non',
	'adm_activation_mod_last_visit_index' => 'Date de dernière visite sur l\'index',
	'adm_activation_mod_last_visit_index_explain' => 'Affiche la date de dernière visite du membre sur l\'index, ne fonctionne que si le membre accepte les cookies',
	'adm_activation_mod_last_visit_profil' => 'Date de dernière visite sur le profil',
	'adm_activation_mod_last_visit_profil_explain' => 'Affiche la date de dernière visite d\'un membre dans son profil public',
	'adm_activation_mod_profile_fields_topic' => 'Champs personnels dans les sujets',
	'adm_activation_mod_profile_fields_topic_explain' => 'Permet de définir dans la création de champs personnalisés si ceux-ci apparaîtront dans le profil (avec vérification des groupes aussi)',
	'adm_activation_mod_url_rewriting' => 'URL rewriting',
	'adm_activation_mod_url_rewriting_explain' => 'L\'URL rewriting réécrit les URL principales du forum (forums, sujets notamment) pour améliorer le référencement de vos pages (en supprimant les variables des URL). Voir <strong><a href="../index.php?p=faq&amp;area=url_rewriting&amp;section=admin">la FAQ</a></strong> pour plus d\'informations.',
	'adm_activation_mod_topic_notification' => 'Surveillance des sujets',
	'adm_activation_mod_topic_notification_explain' => 'En activant cette option les membres pourront surveiller des sujets, accéder rapidement aux sujets qu\'ils surveillent et recevoir un email en cas de réponse aux sujets qu\'ils surveillent',
	'adm_activation_mod_print_topic' => 'Impression des sujets',
	'adm_activation_mod_print_topic_explain' => 'Ajoute un bouton "imprimer" permettant de voir une version imprimable du sujet',
	'adm_activation_mod_forums_moderators' => 'Modérateurs des forums',
	'adm_activation_mod_forums_moderators_explain' => 'Affiche la liste des groupes / membres modérant le forum en dessous de sa description sur l\'index',
	'adm_activation_mod_highlight_code' => 'Coloration syntaxique',
	'adm_activation_mod_highlight_code_explain' => 'Active la liste des FSBcodes permettant une coloration syntaxique d\'un langage dans les messages (CSS, PHP, etc ...). La coloration syntaxique est une fonctionnalité assez lente',
	'adm_activation_mod_topic_description' => 'Description des sujets',
	'adm_activation_mod_topic_description_explain' => 'Permet d\'ajouter une description du sujet lors de sa création. La description apparaitra en dessous du titre du sujet dans la liste des sujets',
	'adm_activation_mod_upload' => 'Upload de fichiers',
	'adm_activation_mod_upload_explain' => 'Cette fonction permet aux personnes ayant le droit (paramétrable dans les autres droits) d\'uploader des fichiers depuis leur PC vers le serveur et de les mettre à disposition dans des messages',
	'adm_activation_mod_no_avatar' => 'Avatar par défaut',
	'adm_activation_mod_no_avatar_explain' => 'Affiche un avatar par défaut si le membre ne possède pas d\'avatar',
	'adm_activation_mod_abuse' => 'Messages abusifs',
	'adm_activation_mod_abuse_explain' => 'Permet aux membres de signaler un message abusif aux modérateurs',
	'adm_activation_mod_calendar' => 'Calendrier',
	'adm_activation_mod_calendar_explain' => 'Le calendrier permet de lister les événements pour une journée / période donnée. Les membres peuvent ajouter des événements au calendrier, ceux-ci devront être validés (ou non) par un modérateur',
	'adm_activation_mod_visual_confirmation' => 'Confirmation visuelle',
	'adm_activation_mod_visual_confirmation_explain' => 'Ajoute une image contenant un code aléatoire à écrire lors de l\'inscription pour valider l\'inscription. Ce système permet d\'éviter les inscriptions automatiques par des robots et le spam',
	'adm_activation_mod_post_captcha' => 'Confirmation visuelle des messages',
	'adm_activation_mod_post_captcha_explain' => 'Ajoute une image contenant un code aléatoire à écrire pour les visiteurs (non inscrits) lorsqu\'ils postent un message, afin d\'éviter des messages indésirables de spam par des robots',
	'adm_activation_mod_portail' => 'Portail',
		'adm_activation_mod_portail_explain' => 'Le portail est une fonction se greffant à la place de l\'index de votre forum. Il affiche plusieurs modules aux visiteurs arrivant sur le forum tels que des news, l\'inscription à la newsletter, les derniers messages postés sur le forum, etc ... Vous pouvez personnaliser votre portail comme vous l\'entendez.',
	'adm_activation_mod_rss' => 'Flux RSS',
	'adm_activation_mod_rss_explain' => 'Permet aux membres d\'utiliser les flux RSS du forum afin d\'être tenus au courant en permanence des derniers messages sur le forum.',
	'adm_activation_mod_previous_post' => 'Afficher le message précédent',
	'adm_activation_mod_previous_post_explain' => 'Affiche sur chaque page du sujet, le dernier message de la page précédente afin de s\'y retrouver plus facilement.',
	'adm_activation_mod_cookie_view' => 'Limitation des visions de sujets',
	'adm_activation_mod_cookie_view_explain' => 'Permet de limiter l\'incrémentation du compteur "vu" pour chaque sujet par une vision par membre et par session (utilisation d\'un cookie).',
	'adm_activation_mod_bot_list' => 'Robots sur le forum',
	'adm_activation_mod_bot_list_explain' => 'Affiche dans la liste des connectés si des robots visitent actuellement votre forum (référencement, contenu des pubs, etc ..)',
	'adm_activation_mod_wysiwyg' => 'Editeur WYSIWYG',
	'adm_activation_mod_wysiwyg_explain' => 'Le WYSIWYG (What You See Is What You Get - Ce que vous voyez est ce que vous obtiendrez) permet à vos membres d\'utiliser un éditeur de texte comme Word pour poster leurs messages. Ils verront directement ce qu\'ils écriront à l\'écran (gras, italique, couleurs, etc ..)',
	'adm_activation_mod_root_support' => 'Support automatique',
	'adm_activation_mod_root_support_explain' => 'En activant cette option, un membre de notre équipe de support pourra se connecter en administrateur sur votre forum afin de vous aider. N\'activez cette option que si un membre de notre équipe de support vous le demande. Une fois le support achevé, désactivez à nouveau cette option. Veuillez noter que cette option est extrêmement sécurisée: le membre de l\'équipe ne pourra se connecter qu\'à l\'aide d\'un mot de passe privé connu de nous seuls qui change automatiquement en permanence.',
	'adm_mods_stream_last' => 'Les derniers MODS ajoutés sur notre serveur',
	'adm_activation_mod_contact_form' => 'Formulaire de contact',
	'adm_activation_mod_contact_form_explain' => 'Cette option ajoute un lien dans le haut du forum, permettant aux invités de contacter les administrateurs du forum (en cas de soucis, etc ..).',
	'adm_activation_mod_rsa' => 'Chiffrage RSA',
	'adm_activation_mod_rsa_explain' => 'Si le chiffrage RSA est activé, et que l\'extension PHP Bcmath est chargée sur votre serveur, les formulaires d\'inscription et de connexion au forum seront davantage sécurisés, en chiffrant les données transitant entre l\'utilisateur et le forum.',
	'adm_mods_stream_total_cat' => '%d mod(s)',
	'adm_mods_cat_list' => 'Liste des catégories de MODS',
	'adm_mods_cat_list_mod' => 'Liste des MODS de la catégorie "%s"',
	'adm_mods_content_title' => 'Fiche du MOD: %s',
	'adm_mods_install_full' => 'Installer le MOD',
	'adm_mods_download_full' => 'Télécharger le MOD',
	'adm_mods_stream_not_exists' => 'Le MOD que vous tentez d\'installer n\'existe pas',
	'adm_mods_stream_exists' => 'Vous avez déjà installé ce MOD',
	'adm_mods_backup_format' => 'Format du backup',
	'adm_mods_backup_format_explain' => 'Lors de la pré-installation du module (un test permettant de voir si le MOD est compatible avec votre forum), les fichiers qui seront modifiés sont sauvegardés (dans le dossier ~/mods/save/ de votre forum).',
	'adm_mods_backup_dir' => 'Dossier',
	'adm_mods_upload' => 'Uploader un MOD pour l\'installer',
	'adm_mods_upload_path' => 'Chemin du MOD à uploader',
	'adm_mods_not_exists' => 'Le mod recherché n\'existe pas',
	'adm_activation_mod_calendar_stats' => 'Evénements des prochains jours',
	'adm_activation_mod_calendar_stats_explain' => 'Affiche les événements des 3 prochains jours sur l\'index',
));


/* EOF */