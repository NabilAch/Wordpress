<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress-clean' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'Warex' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'toto' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';vLA?{XB+-^zN2&%]j,Vp-QwOYM$v#E-WL+?ni`yDMTyHgb4(LNR^>so}%tgUPLG' );
define( 'SECURE_AUTH_KEY',  ',9 Ys,`PBu<rmqN lW:S:/+_6veQw[ABGtKjQ1Sy0jkhwP,u_|juCPhXdZjC{,|N' );
define( 'LOGGED_IN_KEY',    ' {XC>~})kOZ?<y#OIp8a)AF22XGPj^~l(F$&4^LO$:nWdHi]Kx!UG5F$DcX](&a9' );
define( 'NONCE_KEY',        '@S^~dOGyU9iIM,nvY.9SUk:I^jyf1Y{&r#~CM:D:SSh:6|v1(MQ5Bz6N,3PuQ67?' );
define( 'AUTH_SALT',        'POt mDN]J{7MvCK:m~-Aq[)s]>GvDUI-xp,u<b`5{aIkl?2Pk>zY%(edc(7`m4km' );
define( 'SECURE_AUTH_SALT', 'U3Bm!A1Bm]/#p[1LspAdv;#WdB_#E4s<A:y+@ud}#7<YGv%v|vtRBbnLk&.ajP L' );
define( 'LOGGED_IN_SALT',   'iqM1pjxB=&Eq|gI1(5b>,Rg,c0,q6Xy*22V&JtY3R3}V2piM _2RU7gA&_Xu^Ams' );
define( 'NONCE_SALT',       'QO0f>O/UV`~Y-]`,m%Y:g8^yxVQlF=Q2T+w4$o(3%]M*@{N-*(Q3nE)!Nd(=^/4~' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

define('FS_METHOD', 'direct');
