<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'None specified'|'Amazon Aurora'|'AWS PostgreSQL'|'MySQL'|'Microsoft SQL Server'|'Oracle Database'|'MariaDB'|'SAP'|'Db2 LUW'|'MongoDB'> $targetDatabaseEngine
 */
class NoDatabaseMigrationPreference extends Shape
{
    /**
     * @param array{targetDatabaseEngine: list<'None specified'|'Amazon Aurora'|'AWS PostgreSQL'|'MySQL'|'Microsoft SQL Server'|'Oracle Database'|'MariaDB'|'SAP'|'Db2 LUW'|'MongoDB'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
