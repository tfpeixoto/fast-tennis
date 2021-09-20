<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'db_fasttennis' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K7#X>R>F`{Au?eJQK&Z4`&;jytWm9F~1oRiB8R;e}c6B*Pb[!)]H(-]g86!jHce3' );
define( 'SECURE_AUTH_KEY',  'mkcN3?K}z[rHAo[UyE=ltr8sGx+g.@A=6$p;=lp[XX<2K,Im6;CJ5v,hemm]iHq}' );
define( 'LOGGED_IN_KEY',    'n6sIeD-50G!SBIf~dKL{yuQgj>+_SY -`E/1cR5<%G:B+iP?-em7fJ>:FH|y^3W!' );
define( 'NONCE_KEY',        'TwXf@XI<p/~@|68Dl_1yO:mU9eB8wfFSf[3<`7cU}/j_ySnngsIcQ6=:&-9KHaB.' );
define( 'AUTH_SALT',        '(d(b^K)*XC^o{!y(]2i~V,Oaqt=d-f{?y*eOfyLs)i(PKppS0+0zXBv9af]b5UFO' );
define( 'SECURE_AUTH_SALT', 'C3Z5W[Q9=D3 U!Q9]>`J*HHLp3c2 WO/0hdt&&v<8B`<gPA)c%hf)=O@pUcs&8T*' );
define( 'LOGGED_IN_SALT',   '/rJk#Ni[=xrCUrt>iv/1:8<tz>4r-=,L4i0*~|C%XTnqyNnGRfE>OSF-? %iv<57' );
define( 'NONCE_SALT',       'UD5,qV+hm?))cWw62 ]Uo<s__S5/K6Qbg-gWRc>rN;kS u1KxT2iMDKB~cpjASk@' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
