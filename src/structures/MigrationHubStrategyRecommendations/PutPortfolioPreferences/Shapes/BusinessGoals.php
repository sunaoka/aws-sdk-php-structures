<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\PutPortfolioPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $licenseCostReduction
 * @property int $modernizeInfrastructureWithCloudNativeTechnologies
 * @property int $reduceOperationalOverheadWithManagedServices
 * @property int $speedOfMigration
 */
class BusinessGoals extends Shape
{
    /**
     * @param array{
     *     licenseCostReduction?: int,
     *     modernizeInfrastructureWithCloudNativeTechnologies?: int,
     *     reduceOperationalOverheadWithManagedServices?: int,
     *     speedOfMigration?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
