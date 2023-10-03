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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         ']O)x$$DGmJL0JzJX;]SJw&_6`+8n5wpx1<s) e5L+=/Gwk?puPdx~^x(jDA_t@Q%' );
define( 'SECURE_AUTH_KEY',  '36m]%=[Hr(YxF9{jh0DnPe(iFliea&th``F+L$,9K,^!h.ef~J$G48$7!2FbH}VY' );
define( 'LOGGED_IN_KEY',    'T+B6K%KL+yJo(:5FahZ0T%NHYvMrv[J9sD:Y>W8FLEiQo]wYH5v*W:)/F^0.i?dF' );
define( 'NONCE_KEY',        'GKrALNCI!i1jbbdQXf@dzTXhiHuOLEC)]!WZ!Af`m)t-Og,J|D+iy`Rnmz1 Q63c' );
define( 'AUTH_SALT',        '!F^XBv_K#R#4yfBp-:S01?6kpqRx?,n<d}oy.$I-Er_*NlM>im@UI(xE;Z/89kZs' );
define( 'SECURE_AUTH_SALT', 'pm`iS,KM#*~%LG_gP,0I%:n(IAU.J$Yi/r,H1|}_mY67ixZWCbyN$zk^:B#`#E&r' );
define( 'LOGGED_IN_SALT',   '?MW<X~FBk{g2@H,h4TlH=IEl2xF*(%tVQ|S:QzlbFf#Z_<qi,woK@*h1iCQ8MBR6' );
define( 'NONCE_SALT',       'zKNX@w7y,jX(0TmAE/IvmF< j^Kl]-T%>mGpilKk2%=LhYS[L>!Q+e-euD>6/xZs' );
define('FS_METHOD','direct');
define( 'WP_MEMORY_LIMIT', '500M' );
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
