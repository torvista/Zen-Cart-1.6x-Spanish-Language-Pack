<?php //Spanish Language Pack for Zen Cart 1.6: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**TODO
 * @package admin
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: coupon_restrict.php 16174 2010-05-02 14:10:30Z drbyte $
 */

define('HEADING_TITLE', 'Restricciones de los Cupones de Descuento para Productos/Categorías');
define('HEADING_TITLE_CATEGORY', 'Restricciones de categorías');
define('HEADING_TITLE_PRODUCT', 'Restricciones de productos');

define('HEADER_COUPON_ID', 'ID del cupón');
define('HEADER_COUPON_NAME', 'Nombre del cupón');
define('HEADER_CATEGORY_ID', 'ID de categoría');
define('HEADER_CATEGORY_NAME', 'Nombre de categoría');
define('HEADER_PRODUCT_ID', 'ID de producto');
define('HEADER_PRODUCT_NAME', 'Nombre de producto');
define('HEADER_RESTRICT_ALLOW', 'Permitir');
define('HEADER_RESTRICT_DENY', 'Denegar');
define('HEADER_RESTRICT_REMOVE', 'Eliminar');
define('IMAGE_ALLOW', 'Permitir');
define('IMAGE_DENY', 'Denegar');
define('IMAGE_REMOVE', 'Eliminar');
define('TEXT_ALL_CATEGORIES', 'Todos las Categorías');

define('MAX_DISPLAY_RESTRICT_ENTRIES', 20);
define('TEXT_ALL_PRODUCTS_ADD', 'Añade Todos los Productos de la Categoría');
define('TEXT_ALL_PRODUCTS_REMOVE', 'Quitar Todos los Productos de la Categoría');
define('TEXT_INFO_ADD_DENY_ALL', '<strong>Al Añadir Todos los Productos, solamente se añadirán los productos que no tengan actualmente ninguna restricción.<br />
                    Al seleccionar Quitar Todos los Productos, solamente se quitarán los productos para los que se ha especificado Denegado o Permitido.</strong>');

define('TEXT_MANUFACTURER', 'Fabricante: ');
define('TEXT_CATEGORY', 'Categoría: ');
define('ERROR_DISCOUNT_COUPON_DEFINED_CATEGORY', 'Categoría no completada');
define('ERROR_DISCOUNT_COUPON_DEFINED_PRODUCT', 'Producto no completado');

define('HEADER_MANUFACTURER_NAME', '<br> -- OR -- <br>' . 'Manufacturer: ');
define('TEXT_ALL_MANUFACTURERS_ADD', 'Add All Manufacturer Products');
define('TEXT_ALL_MANUFACTURERS_REMOVE', 'Remove All Manufacturer Products');

define('HEADER_PRODUCT_STATUS', 'Status');
define('HEADER_PRODUCT_MODEL', 'Model');

define('ERROR_RESET_CATEGORY_MANUFACTURER', 'Category and Manufacturer filters reset. Use filters individually.');

define('TEXT_PULLDOWN_ALLOW', 'Allow');
define('TEXT_PULLDOWN_DENY', 'Deny');
define('TEXT_SUBMIT_CATEGORY_ADD', 'Add');
define('TEXT_SUBMIT_PRODUCT_UPDATE', 'Update');
