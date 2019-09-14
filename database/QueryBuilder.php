<?php
class QueryBuilder
{
    protected $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass = null)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        if ($intoClass == null) {
            return $statement->fetchAll(PDO::FETCH_CLASS);
        }
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function save($table)
    { }
}
