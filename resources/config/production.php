<?php

$app['log.level'] = Monolog\Logger::ERROR;

/**
 * Postgres
 */
$app['db.options'] = array(
    "driver" => "pdo_pgsql",
    "user" => "urlshortener",
    "password" => "urlshortener",
    "dbname" => "urlshortener",
    "host" => "postgres",
    "port" => 5432
);
