<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'FORCE_SSL_ADMIN', true ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Enforce SSL
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'RFtsckVqPkV4Q3lNcFJOTVpEVzApSzJhZHZ4NmdAOzwkWy1PSzd9SHRua3AvYn1xI29FdHF2YkxJZCEqfTZhfg==' );

/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'whats' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Gomes1234@vps' );

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
define( 'AUTH_KEY',         '3M0F+3dSB#7{*)r$QNDK@x]qj#Gl*xM}G&~D xjvzfE>wlmR>YE$0Kp/Yp5Z%zlQ' );
define( 'SECURE_AUTH_KEY',  '7B=_sYB,DLW=/]7ymY)7mBZ.e;Nio(%,)Mi{y1,$)]SA*A )OYk(V/QeIbs[?0&]' );
define( 'LOGGED_IN_KEY',    ':.Rm~ Z: T^-a_x>@mn;Yo(&6t74#F0iw_;~1Vqg__#l3qkcx69E9)7raO6_n_2/' );
define( 'NONCE_KEY',        '%(G,3uq/`7 AU^VQPIU^I[#~pL_]0;=;2ho=j@)%&*$F4 2p*~Zh{=Z~:<eRx{*f' );
define( 'AUTH_SALT',        'XWZ*wz^=}.{YN:EAAh%`mQ$ m}l/#dO}rNqL>Z2uw]*B{[c}@EO-RNAna*Vq5./6' );
define( 'SECURE_AUTH_SALT', '2Tm!CL3DyU$!L1<>i]Z0?;z<9cZK<:Dl@qg`) <[q#{JB|u9E*U`Ti8gw?4xW#;K' );
define( 'LOGGED_IN_SALT',   '|@swf WKlz&}4@B3?lJ+OULn!5fSi-dF6`.`01_g N-.fW_G(zd80B0U4!6#M&?=' );
define( 'NONCE_SALT',       'k=JFhi%MNlBP)$#[YjF+B`U!V<n>0y)n>zD6T2GQ!3wvf? -+2,xXiW=W_YK2EvX' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
