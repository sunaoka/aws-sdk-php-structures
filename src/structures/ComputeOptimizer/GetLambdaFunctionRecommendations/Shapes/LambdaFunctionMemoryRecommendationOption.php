<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLambdaFunctionRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $rank
 * @property int $memorySize
 * @property list<LambdaFunctionMemoryProjectedMetric> $projectedUtilizationMetrics
 * @property SavingsOpportunity $savingsOpportunity
 * @property LambdaSavingsOpportunityAfterDiscounts $savingsOpportunityAfterDiscounts
 */
class LambdaFunctionMemoryRecommendationOption extends Shape
{
    /**
     * @param array{
     *     rank?: int,
     *     memorySize?: int,
     *     projectedUtilizationMetrics?: list<LambdaFunctionMemoryProjectedMetric>,
     *     savingsOpportunity?: SavingsOpportunity,
     *     savingsOpportunityAfterDiscounts?: LambdaSavingsOpportunityAfterDiscounts
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
