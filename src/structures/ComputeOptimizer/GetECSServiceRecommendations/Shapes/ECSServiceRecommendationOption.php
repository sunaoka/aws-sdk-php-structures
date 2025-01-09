<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $memory
 * @property int $cpu
 * @property SavingsOpportunity $savingsOpportunity
 * @property ECSSavingsOpportunityAfterDiscounts $savingsOpportunityAfterDiscounts
 * @property list<ECSServiceProjectedUtilizationMetric> $projectedUtilizationMetrics
 * @property list<ContainerRecommendation> $containerRecommendations
 */
class ECSServiceRecommendationOption extends Shape
{
    /**
     * @param array{
     *     memory?: int,
     *     cpu?: int,
     *     savingsOpportunity?: SavingsOpportunity,
     *     savingsOpportunityAfterDiscounts?: ECSSavingsOpportunityAfterDiscounts,
     *     projectedUtilizationMetrics?: list<ECSServiceProjectedUtilizationMetric>,
     *     containerRecommendations?: list<ContainerRecommendation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
