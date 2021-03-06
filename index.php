<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

// Create Asset and runtime folder if not created
if (!file_exists('protected/runtime')) {
    mkdir('protected/runtime',0777);
}

if (!file_exists('assets')) {
    mkdir('assets',0777);
}


require_once($yii);
Yii::createWebApplication($config)->run();
