<?php //Spanish Language Pack for Zen Cart 1.6x: https://github.com/torvista/Zen-Cart-1.6x-Spanish-Language-Pack
/**
 * @package languageDefines
 * @copyright Copyright 2003-2015 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Modified in V1.6.0 $
 */

define('NAVBAR_TITLE', 'Expiró el tiempo de sesión');
define('HEADING_TITLE', '¡Vaya! Expiró el tiempo de sesión');
define('HEADING_TITLE_LOGGED_IN', '¡Vaya! Lo sentimos, no se puede realizar la operación solicitada.');
define('TEXT_INFORMATION', '<p>Si estaba realizando un pedido, por favor identifíquese de nuevo y su carro de la compra será recuperado. Deberá volver a realizar el pago y completar su última compra. </p><p>Si completó su pedido y desea revisarlo' . (DOWNLOAD_ENABLED == 'true' ? ', o tiene una descarga y desea completarla' : '') . ', por favor, vaya a <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mi Cuenta</a> para visualizar su pedido.</p>');

define('TEXT_INFORMATION_LOGGED_IN', 'Aún está conectado a su cuenta y puede seguir comprando.');

define('HEADING_RETURNING_CUSTOMER', 'Entrar');
define('TEXT_PASSWORD_FORGOTTEN', '¿Ha olvidado su contraseña?');
