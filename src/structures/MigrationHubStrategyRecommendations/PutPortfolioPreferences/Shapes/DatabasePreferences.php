<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\PutPortfolioPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS-managed'|'Self-manage'|'No preference'|null $databaseManagementPreference
 * @property DatabaseMigrationPreference|null $databaseMigrationPreference
 */
class DatabasePreferences extends Shape
{
    /**
     * @param array{
     *     databaseManagementPreference?: 'AWS-managed'|'Self-manage'|'No preference'|null,
     *     databaseMigrationPreference?: DatabaseMigrationPreference|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
