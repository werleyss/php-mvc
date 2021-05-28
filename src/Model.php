<?php


namespace SON;


class Model
{
    private $pdo;
    protected $table;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function all()
    {
        $sql = 'SELECT * FROM ' . $this->table;
        $result = $this->getPdo()->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function get()
    {
        return [
            'nome' => 'Werley Silva'
        ];
    }

    /**
     * @return \PDO
     */
    public function getPdo(): \PDO
    {
        return $this->pdo;
    }

    public function setTableName(string $table)
    {
        $this->table = $table;
    }

    public function getTableName()
    {
        return $this->table;
    }
}