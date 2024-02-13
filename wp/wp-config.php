<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'prog-11-wp' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}>y=%L*v0[Gz6HI/9:TIy7$M%du-W:(B&pD@E^umYk/so7T9SL}oCmo_3PDM2,Cb' );
define( 'SECURE_AUTH_KEY',  'G<):[>V={xz1DKFy-N<S|}TgyGW$P)BPN2j*PMG|-lI$TQ2_)tx]vw-Wsy;>runZ' );
define( 'LOGGED_IN_KEY',    'CQ$2<oXzG0an$j?7&iMPqvGS<ai!O_*+H,-M.i(S/$-I&p[!Y6~=)Xal1tp ^2<(' );
define( 'NONCE_KEY',        'V>$TX*PFOeSCRxZ~}~ig)){MLGah%m-XAJGI9_Y2Z@zDsYw5H)i!6%So<T7.>MQv' );
define( 'AUTH_SALT',        '~4P->}!#Sih,]<cU8YN(5B~F@DyXH C<W9~qbzu8FBC+@Tg_x*FtW`j9oWb3.iMS' );
define( 'SECURE_AUTH_SALT', 'yf$)6iKLsVZYG0ZaXZQ:*CB1YAyiwcsj00qN-4$+/N/df~L~];ykLC4f2lP`8YPy' );
define( 'LOGGED_IN_SALT',   'ogS(gXI:k!57lKHhDK@9..h<Vi6|ynvQb:Q9aWr%X87}9o|fxmraU>|n&n9OIb_A' );
define( 'NONCE_SALT',       'nM!bhV24>19eEi6[mV+1B<rkzDY/vX-J2k>lOPdlNQq:4a?*S2K+e<aPN^GY_V;F' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
