<?php
//后台登录页面
//header("Location: yikecms.php?m=Index&a=login");
define('ADMIN_PATH', './ThinkPHP/');
define('APP_NAME', 'admin');
define('APP_PATH', './admin/');
define('YIKE_DATA_PATH', './data/');
define('HOME_HTML','./home/Html/');
define('HOME_CONF','./home/Conf/');
define('ADMIN_CONF','./admin/Conf/');
define('HOME_RUNTIME','./home/Runtime/');
define('ADMIN_RUNTIME','./admin/Runtime/');
define('APP_DEBUG', true);
require(ADMIN_PATH."ThinkPHP.php");
exit;