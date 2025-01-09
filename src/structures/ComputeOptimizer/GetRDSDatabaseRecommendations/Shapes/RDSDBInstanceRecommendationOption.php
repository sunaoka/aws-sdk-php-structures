<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dbInstanceClass
 * @property list<RDSDBUtilizationMetric> $projectedUtilizationMetrics
 * @property double $performanceRisk
 * @property int $rank
 * @property SavingsOpportunity $savingsOpportunity
 * @property RDSInstanceSavingsOpportunityAfterDiscounts $savingsOpportunityAfterDiscounts
 */
class RDSDBInstanceRecommendationOption extends Shape
{
    /**
     * @param array{
     *     dbInstanceClass?: string,
     *     projectedUtilizationMetrics?: list<RDSDBUtilizationMetric>,
     *     performanceRisk?: double,
     *     rank?: int,
     *     savingsOpportunity?: SavingsOpportunity,
     *     savingsOpportunityAfterDiscounts?: RDSInstanceSavingsOpportunityAfterDiscounts
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
