<?php

// We choose to use Mysql instead of Sqlite
define('DB_DRIVER', 'mysql');

// Mysql parameters
define('DB_USERNAME', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASSWORD', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_HOSTNAME', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_NAME', getenv('OPENSHIFT_APP_NAME'));
