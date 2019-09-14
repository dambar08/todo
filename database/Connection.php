<?php
class Connection
{
    public static function make($config)
    {
        try {
            return new PDO(
                $config['driver'] . ':host=' . $config['host'] . ';dbname=' . $config['schema'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
