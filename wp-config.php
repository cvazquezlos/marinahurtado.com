<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'marinahurtado_web');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'doggybra_admin');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'hO1EBVyvD-');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'LMVgU*r2?+<Iu6OwE,9gpISv>}c67IX/3o8A*SNIqFCT,XT2J|*)5H7M)E@4Y(-J');
define('SECURE_AUTH_KEY', 'mD^%}wZ<(dUV*@aUCsdJ?`l5&wx%Y~oIcAG]bU+Mqv9!]7*+X^qnsst9NK:ld3iV');
define('LOGGED_IN_KEY', 'IMERUE2U9`NRP,5BqN!FvSD@KuX#?V +l#c*1^io}}*V)XON M+QYTeA5_I:A0Il');
define('NONCE_KEY', 'W#/92#7zo_<mribCi[:]9QJbW#AlS@y.W0OTV*}OqG?|!_uc+52Fcq 1_u#?l9Dr');
define('AUTH_SALT', '!$mrC]1_qsenJ1sUZm?sVndG1l<t9;cgqNP=}WlD=zadRvQK;v])Wa,Y1yoA GS[');
define('SECURE_AUTH_SALT', '@Y+V<&:_*5uqWWjj{j =4K#mj uiG%5tr~gb*%tcyzyODUg1+fMs6tDj;LA;!F2-');
define('LOGGED_IN_SALT', 'F/+l:DOIt>=Npsb*81jNnl%lEod_u S4^LA4CDO-juVe0Sd6<fU[*>+-[XqMVV`4');
define('NONCE_SALT', '9~]_eh2Na/cFrDRU8g44!-(sU~GW;+Hs!Wvaw;?#xA,@w_fMs}nI0-7 c:VbbSk3');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

