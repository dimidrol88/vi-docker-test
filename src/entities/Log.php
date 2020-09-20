<?php

namespace core\entities;

use core\db\DB;

class Log extends DB
{
    private const TABLE_NAME = 'logs';

    /**
     * @return array|null
     */
    public function getAll()
    {
        $sql = "SELECT ip, created_at FROM " . self::TABLE_NAME . " ORDER BY id DESC LIMIT 100";

        $statement = $this->pdo->query($sql);

        return $this->getAssoc($statement);
    }

    /**
     * @param string $ip
     * @return bool
     */
    public function add(string $ip)
    {
        $statement = $this->pdo->prepare("
            INSERT INTO " . self::TABLE_NAME . " (ip, created_at) 
            VALUE (:ip, NOW())
        ");

        $statement->bindParam(':ip', $ip);

        return $statement->execute();
    }
}
