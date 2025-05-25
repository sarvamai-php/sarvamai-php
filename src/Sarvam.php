<?php declare(strict_types=1);

namespace Sarvam;

use Sarvam\Connection;

class Sarvam {
    public readonly Connection $connection;

    public function __construct(Connection $connection) {
        $this->connection = $connection;
    }

    public function start(): string {
        return $this->connection->connect();
    }
}
