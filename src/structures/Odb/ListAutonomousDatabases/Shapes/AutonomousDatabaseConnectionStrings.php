<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $allConnectionStrings
 * @property string|null $dedicated
 * @property string|null $high
 * @property string|null $medium
 * @property string|null $low
 * @property list<DatabaseConnectionStringProfile>|null $profiles
 */
class AutonomousDatabaseConnectionStrings extends Shape
{
    /**
     * @param array{
     *     allConnectionStrings?: array<string, string>|null,
     *     dedicated?: string|null,
     *     high?: string|null,
     *     medium?: string|null,
     *     low?: string|null,
     *     profiles?: list<DatabaseConnectionStringProfile>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
