<?php
require 'core/Route.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
$config = require 'config/database.php';
Connection::make($config);
