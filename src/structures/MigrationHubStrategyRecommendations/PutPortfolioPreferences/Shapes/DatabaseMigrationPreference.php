<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\PutPortfolioPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Heterogeneous|null $heterogeneous
 * @property Homogeneous|null $homogeneous
 * @property NoDatabaseMigrationPreference|null $noPreference
 */
class DatabaseMigrationPreference extends Shape
{
    /**
     * @param array{
     *     heterogeneous?: Heterogeneous|null,
     *     homogeneous?: Homogeneous|null,
     *     noPreference?: NoDatabaseMigrationPreference|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
