<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dbInstanceClass
 * @property list<RDSDBUtilizationMetric>|null $projectedUtilizationMetrics
 * @property double|null $performanceRisk
 * @property int|null $rank
 * @property SavingsOpportunity|null $savingsOpportunity
 * @property RDSInstanceSavingsOpportunityAfterDiscounts|null $savingsOpportunityAfterDiscounts
 */
class RDSDBInstanceRecommendationOption extends Shape
{
    /**
     * @param array{
     *     dbInstanceClass?: string|null,
     *     projectedUtilizationMetrics?: list<RDSDBUtilizationMetric>|null,
     *     performanceRisk?: double|null,
     *     rank?: int|null,
     *     savingsOpportunity?: SavingsOpportunity|null,
     *     savingsOpportunityAfterDiscounts?: RDSInstanceSavingsOpportunityAfterDiscounts|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
