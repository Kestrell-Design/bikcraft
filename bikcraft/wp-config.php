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
define( 'DB_NAME', 'bikcraft' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'Elinho' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'ElinhoM8743*' );

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
define( 'AUTH_KEY',         ' 5_-4xKKRsq%|nhn,!Ty.fmv7^WrTueL$`pj])9:=ou~pps.D`MFdL1Oy*UQQ>co' );
define( 'SECURE_AUTH_KEY',  'VXB.h{DcZT/n[DF7C6s~R))%Nt$u^^Jd2.Xb xJ6@PcfXO`2E)>0&$|{CW)dG<FR' );
define( 'LOGGED_IN_KEY',    'mN$G[(jD:e&{MA:a4-~((X/2zVVB008xTQnz![7zg@,FeN{(LT&Udo>lsXw2x*r;' );
define( 'NONCE_KEY',        '}R^0;qhU1,$U[,$%){&<,UB{SLMmsix3CO>%TG8j]tCpjjL2)XoSjU,+vnaG=OvG' );
define( 'AUTH_SALT',        'v>{Atc#Ul_IDl}SQSmp+=7PKw7)W5/d0S|o@]z,4yG5atiyBd:Ii(fi,+zUgi>JS' );
define( 'SECURE_AUTH_SALT', '5^pt;h3%Q)+||rk;$o$S)!K[QK&QOU[V@:P4NkL>yY,G80a)fpviBr26)W98 0![' );
define( 'LOGGED_IN_SALT',   ' e<w,1N9SgC+dBL&o|YQ*`DD?KpJKr6Bm?k?V+OF (L2|4m):5+uG}a19Y Cee<_' );
define( 'NONCE_SALT',       '0&f}WAc-RAHondAugOfAJxVp$sVq,*N{F8VFPpqFdOes]l.LC#U,r9*9;_k0okUI' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'bk_';

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
