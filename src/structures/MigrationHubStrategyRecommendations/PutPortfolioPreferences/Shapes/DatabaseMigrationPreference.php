<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\PutPortfolioPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Heterogeneous $heterogeneous
 * @property Homogeneous $homogeneous
 * @property NoDatabaseMigrationPreference $noPreference
 */
class DatabaseMigrationPreference extends Shape
{
    /**
     * @param array{
     *     heterogeneous?: Heterogeneous,
     *     homogeneous?: Homogeneous,
     *     noPreference?: NoDatabaseMigrationPreference
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
