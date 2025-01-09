<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS-managed'|'Self-manage'|'No preference' $databaseManagementPreference
 * @property DatabaseMigrationPreference $databaseMigrationPreference
 */
class DatabasePreferences extends Shape
{
    /**
     * @param array{
     *     databaseManagementPreference?: 'AWS-managed'|'Self-manage'|'No preference',
     *     databaseMigrationPreference?: DatabaseMigrationPreference
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
