<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\PutPortfolioPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 5> $licenseCostReduction
 * @property int<1, 5> $modernizeInfrastructureWithCloudNativeTechnologies
 * @property int<1, 5> $reduceOperationalOverheadWithManagedServices
 * @property int<1, 5> $speedOfMigration
 */
class BusinessGoals extends Shape
{
    /**
     * @param array{
     *     licenseCostReduction?: int<1, 5>,
     *     modernizeInfrastructureWithCloudNativeTechnologies?: int<1, 5>,
     *     reduceOperationalOverheadWithManagedServices?: int<1, 5>,
     *     speedOfMigration?: int<1, 5>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
