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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'leo2' );

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
define( 'AUTH_KEY',         'ji.S9kb<f%oQhYnthlB22&(5*yf02iM$9v(:7QU<%v*4u0]BLpx[peh>rycP-K )' );
define( 'SECURE_AUTH_KEY',  'TP&[[NCc6f(y8G;:UEh:<Rf!:8@F9TUq_&{1v7OA^tdtw2r?{g`7:4$i&y[MsZj&' );
define( 'LOGGED_IN_KEY',    '-%zD9-iTuefOWlbN$t!XtphMax:*f,x<OCNVm6P:A{pW;.j#tiS(s&&VmGL)KVFY' );
define( 'NONCE_KEY',        'z]J=PRV`rCJ=QL?{vPf_h?1#XkB9 wE.w{I.ej;N%-fN5ZvY;,8@uR_Tnl/j:kN=' );
define( 'AUTH_SALT',        'iv`(Kvy.tQ)t&1aEG7CXI~Z#/&R=DCK5ca@AZ8`y,5<_`|g)Hv9Im(I}`qQ-N^E_' );
define( 'SECURE_AUTH_SALT', 'DRk$Jk|Jiv-8g5t:|WTMM}WxTv:EEnBKHXl X,BmxW[K`nZ$g5`MD_ARP% (}f&W' );
define( 'LOGGED_IN_SALT',   '<AYU)m#K2(lm,d(0ybA1`gZsku|ed%>L!`?!?e~zted?U~dyI.sND%|rEl4VUebO' );
define( 'NONCE_SALT',       '1+S?0L|m1d.j$9j1nVgIHD~Nz%+%N)sO[mUlY:UD=Ve4AgZ{e1_!1.L#nx?tF yx' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
