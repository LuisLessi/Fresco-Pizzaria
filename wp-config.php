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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cursoemvideowp' );

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
define( 'AUTH_KEY',         'O7fcde(eX6y/<SoZb*3YKkEnFv{z]7HDTf1<4P+;gG[pL5+uH+ex@%V}h>r#Jp-q' );
define( 'SECURE_AUTH_KEY',  'c^6I,C$OUF8|}_H^U=!#xWL.{5&gUFP{E_b/CE$z-9XoD.8bN:w/HYqe3vGg&v=~' );
define( 'LOGGED_IN_KEY',    ' rVZXatf2H/[45FH!,.<Vj)WG7#7j;2zSHrfB%OTRO}-hz0fA|Aud!;.v.,@o@MN' );
define( 'NONCE_KEY',        '1v[$WCe2m?d@kq^O%|)|c.8bJSo:1 XvxH0p~tgf7WRFM`E(gi9(n6fa.kag}L$l' );
define( 'AUTH_SALT',        '2n<h|BxLu^jcy+,ULy4T#]k|g->%{4#y%F/+>4~-]tnyC3llTO9y>,uNmtyIna!k' );
define( 'SECURE_AUTH_SALT', 'O;<([S;l!U[D.k}@T9$FTE4|Hfq[W3&w.=tkA Pw:$a|_{QbT+:uC;9Egb0%FgzG' );
define( 'LOGGED_IN_SALT',   '9+}HRn%OP0-pa}U,rDK|li,u?D}QpMDxmz8 0{awM:s&/9azp2rO/qNHsv<*0(K ' );
define( 'NONCE_SALT',       'kPRdk}o&&K+70aLqrXuZ3lP.S#XPDs~/sk$HuH>|Fs:2Wzu4GVTg(V5Fr$~wO=@3' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cev_';

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
