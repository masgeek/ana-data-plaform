<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') || define('YII_DEBUG', true);
defined('YII_ENV') || define('YII_ENV', 'dev');

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';


$config = require_once __DIR__ . '/../config/web.php';

/** @noinspection PhpUnhandledExceptionInspection */
(new yii\web\Application($config))->run();
