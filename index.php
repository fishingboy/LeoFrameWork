<?php
// 常數宣告
define('CONTROLLER_PATH', 'controller');
define('MODEL_PATH', 'model');
define('VIEWS_PATH', 'views');
define('SYSTEM_PATH', 'system');

// 載入 router
include_once(SYSTEM_PATH . "/route.php");
include_once(SYSTEM_PATH . "/controller.php");

// 載入 controller
include (CONTROLLER_PATH . "/{$controller}.php");

// 實體化
eval("\$INSTANCE = new $controller();");
$INSTANCE->$method();
