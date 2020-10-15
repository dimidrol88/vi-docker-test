<?php

namespace App\db;

use PDO;
use PDOException;
use PDOStatement;

class DB
{
    /**
     * @var PDO
     */
    protected $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=vi-docker-test-mysql;dbname=app', 'root', 'root');
        } catch (PDOException $e) {
            die('Подключение не удалось: ' . $e->getMessage());
        }
    }

    public function getAssoc(PDOStatement $statement)
    {
        return $statement->FETCHALL(PDO::FETCH_ASSOC);
    }
}
