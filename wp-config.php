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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '9NkjRft`tD{W4@ceBx$ba8|3-0rb%*TYe.h(qQk,7yJY3iykWdrV9lXO1ZtBE4Sc' );
define( 'SECURE_AUTH_KEY',  'qiU)}?Vl,@45pU[.lUueZB:-$]L&?lnbTx_;si Syf!~0lTUN#u)EC^9o1EjM],A' );
define( 'LOGGED_IN_KEY',    '1p?{X|E)BBth/$ L%@W3$TF^gZTn:9c,6wyl~P35>$bHU@*TW^%ha{m{(49?3_lk' );
define( 'NONCE_KEY',        ':dGBrA}(*6AQ(VoNkPloRavjLj@P&aq/SP^m[,a#rtGbL?lt5c_Dr2]~f^cqfQwc' );
define( 'AUTH_SALT',        ';hnG.vpl4OiULXg)Dybw::cDE({tr8^Hk3BP@[nfENO/ygRaG|t9#/p+1WSszUqV' );
define( 'SECURE_AUTH_SALT', 'nM&)8XCr+(Z6ytejDDu<$Df8T~wUDOjdZ_Ve/[u2)XX=#)z&Y90KZ_wxEt(xLLaw' );
define( 'LOGGED_IN_SALT',   'E.id)HEHBYSp-i`#3s>W90Ybs$~0E3mwA3M,3GlPY*M+{~?{?v|3 in&CD:eb]$,' );
define( 'NONCE_SALT',       'j?[8dVWC7zxm@8uS#@RbeL${Y8 ovC8in4^1&Cmd:<(j5&Z?138x*(p_TuH54[|g' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
