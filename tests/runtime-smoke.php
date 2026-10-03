<?php

// Bootstrap the production configuration without development dependencies.
define('YII_ENV', 'prod');
define('YII_DEBUG', false);
$_SERVER['SCRIPT_FILENAME'] = dirname(__DIR__) . '/yii';
require dirname(__DIR__) . '/yii';
