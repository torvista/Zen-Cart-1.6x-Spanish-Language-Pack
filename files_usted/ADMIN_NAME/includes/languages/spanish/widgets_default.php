<?php //Spanish Language Pack for Zen Cart 1.6: https://github.com/torvista/Zen-Cart-1.6-Spanish-Language-Pack
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: $
 */

// Note: The widgets_groups and widgets_description values 
// are built in code; you can't search for them.
// See includes/library/zencart/DashboardWidget/src

// Entries in dashboard_widgets_groups
define('GENERAL_STATISTICS_GROUP', 'Estadísticas Generales');
define('ORDER_STATISTICS_GROUP', 'Estadísticas de Pedidos');
define('NEW_CUSTOMERS_GROUP', 'Clientes Nuevos');
define('COUNTER_HISTORY_GROUP', 'Historial Contador');
define('NEW_ORDERS_GROUP', 'Pedidos Nuevos');
define('LOGS_GROUP', 'Historiales Debug');
define('BANNER_STATISTICS_GROUP', 'Estadísticas Banner');
define('WHOSONLINE_GROUP', 'Visitores Activos');
define('COUNTER_HISTORY_GRAPH_GROUP', 'Gráfico Historial Contador');
define('SALES_GRAPH_REPORT_GROUP', 'Ventas');

// Entries in dashboard_widgets_description
define('GENERAL_STATISTICS', 'Estadísticas Generales');
define('ORDER_STATISTICS', 'Estadísticas de Pedidos');
define('ORDER_SUMMARY', 'Resumen Pedido');
define('NEW_CUSTOMERS', 'Clientes Nuevos');
define('COUNTER_HISTORY', 'Historial Contador');
define('NEW_ORDERS', 'Pedidos Nuevos');
define('LOGS', 'Historiales Debug');
define('BANNER_STATISTICS', 'Estadísticas Banner');
define('WHOSONLINE_ACTIVITY', 'Visitores Activos');
define('COUNTER_HISTORY_GRAPH', 'Historial Contador - Últimos 14 días');
define('SALES_GRAPH_REPORT', 'Ventas');

define('TEXT_TOTAL_LOGFILES_FOUND', '<br>Nota: Hay %s archivos historiales en el servidor.');
define('TEXT_DISPLAYING_RECENT_COUNT', ' (Mostrando solamente los %s archivos más recientes.)');
define('TEXT_NO_LOGFILES_FOUND', 'No se ha encontrado historiales Debug.');
define('TEXT_CLEANUP_LOGFILES', 'Borrar historiales en Gestor de Tienda');
define('TEXT_ADMIN_LOG_SUFFIX', '(admin)');


// ====> Who's Online <====
define('WO_FULL_DETAILS', 'Ver actividad detallado...');
define('WO_REGISTERED', 'Cliente:');
define('WO_GUEST', 'Invitado:');
define('WO_SPIDER', 'Spider:');
define('WO_TOTAL', 'Total actualmente online:');
define('WHOS_ONLINE_ACTIVE_TEXT', 'Carro Activo');
define('WHOS_ONLINE_INACTIVE_TEXT', 'Carro Inactivo');
define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT', 'Activo sin carro');
define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT', 'Inactivo sin carro');

// ===== Sales Graph Widget
define('SALES_GRAPH_TEXT_MONTHLY', 'Ventas Mensuales (excl. el envío)');
define('SALES_GRAPH_TEXT_CLICK', 'Pinche aquí para los detalles completos...');
define('SALES_GRAPH_COLUMN_MONTH', 'Mes');
define('SALES_GRAPH_COLUMN_SALES', 'Ventas');



/* NOTE: defines for additional contributed "plugin" widgets should be placed into
 * a new file in the extra_definitions folder, not in this file, since
 * altering this file makes upgrades more complicated
 * and also makes plugin installation far more complicated than it needs to be.
 */
