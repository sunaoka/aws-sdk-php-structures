<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLambdaFunctionRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $rank
 * @property int|null $memorySize
 * @property list<LambdaFunctionMemoryProjectedMetric>|null $projectedUtilizationMetrics
 * @property SavingsOpportunity|null $savingsOpportunity
 * @property LambdaSavingsOpportunityAfterDiscounts|null $savingsOpportunityAfterDiscounts
 */
class LambdaFunctionMemoryRecommendationOption extends Shape
{
    /**
     * @param array{
     *     rank?: int|null,
     *     memorySize?: int|null,
     *     projectedUtilizationMetrics?: list<LambdaFunctionMemoryProjectedMetric>|null,
     *     savingsOpportunity?: SavingsOpportunity|null,
     *     savingsOpportunityAfterDiscounts?: LambdaSavingsOpportunityAfterDiscounts|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
