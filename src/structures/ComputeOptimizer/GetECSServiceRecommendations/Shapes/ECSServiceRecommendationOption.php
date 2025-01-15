<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $memory
 * @property int|null $cpu
 * @property SavingsOpportunity|null $savingsOpportunity
 * @property ECSSavingsOpportunityAfterDiscounts|null $savingsOpportunityAfterDiscounts
 * @property list<ECSServiceProjectedUtilizationMetric>|null $projectedUtilizationMetrics
 * @property list<ContainerRecommendation>|null $containerRecommendations
 */
class ECSServiceRecommendationOption extends Shape
{
    /**
     * @param array{
     *     memory?: int|null,
     *     cpu?: int|null,
     *     savingsOpportunity?: SavingsOpportunity|null,
     *     savingsOpportunityAfterDiscounts?: ECSSavingsOpportunityAfterDiscounts|null,
     *     projectedUtilizationMetrics?: list<ECSServiceProjectedUtilizationMetric>|null,
     *     containerRecommendations?: list<ContainerRecommendation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
