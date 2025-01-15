<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\PutPortfolioPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 5>|null $licenseCostReduction
 * @property int<1, 5>|null $modernizeInfrastructureWithCloudNativeTechnologies
 * @property int<1, 5>|null $reduceOperationalOverheadWithManagedServices
 * @property int<1, 5>|null $speedOfMigration
 */
class BusinessGoals extends Shape
{
    /**
     * @param array{
     *     licenseCostReduction?: int<1, 5>|null,
     *     modernizeInfrastructureWithCloudNativeTechnologies?: int<1, 5>|null,
     *     reduceOperationalOverheadWithManagedServices?: int<1, 5>|null,
     *     speedOfMigration?: int<1, 5>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
