<?php
return [
    "driver" => parse_ini_file('env.init')['DRIVER'],
    "host" => parse_ini_file('env.init')['HOST'],
    "port" => parse_ini_file('env.init')['PORT'],
    "schema" => parse_ini_file('env.init')['SCHEMA'],
    "username" => parse_ini_file('env.init')['USERNAME'],
    "password" => parse_ini_file('env.init')['PASSWORD'],
    "options" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
];
