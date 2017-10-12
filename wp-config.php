<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'soextreme');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QDU$^vRV+1*2VQMr:e4U{:,Z>EugE,V]tu8E5-yw=xG}:9EBn/R&=`()tnn32)6{');
define('SECURE_AUTH_KEY',  '#d,N_lh38]E=r/:ECbEIz4,GmQj:G!?w5rWE6$1%ZT_(g2$U96>jH<&:;^dotv>L');
define('LOGGED_IN_KEY',    'Dx3 IrYT{r>9/Rg7x/|^R62XcMemZxy~CqKECPmIYwM~dG)RH#F>8n^?I4|f~T>&');
define('NONCE_KEY',        'WSGIMPjXBR]>v!X7Rs0I9iosth9U}+MRHNmwAXD(hA&eZU+taMi`I)G.M`_%Q&#4');
define('AUTH_SALT',        '6oG^rTmq(1Ai&QQzH-a;L$TlU8UiMkzsNawU*Yz)+XWinzZO}UL/]^R-[g)pZ{t,');
define('SECURE_AUTH_SALT', 'jUHvUiUeIpmA<7+&}dFIz!E-K;Yr/i1i$BtCY*BVX4iCuyk~p9_/Yh4h>{tDV+T~');
define('LOGGED_IN_SALT',   'qv(Xhfi>D?8DC<V;4:90{t3V$Elqev$MYHyA2;mww!t{u,~y:^7X?xcSN!}$s16t');
define('NONCE_SALT',       'Y4erk/o@9x/]La#W$lb_Vzq`wTQOgDT081erU8;I6Y;EpN4MCsa$UC*^pzrg2GmK');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'so_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');