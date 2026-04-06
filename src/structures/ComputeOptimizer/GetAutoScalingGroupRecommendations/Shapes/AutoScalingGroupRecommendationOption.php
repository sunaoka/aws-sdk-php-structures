<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoScalingGroupConfiguration|null $configuration
 * @property list<UtilizationMetric>|null $projectedUtilizationMetrics
 * @property double|null $performanceRisk
 * @property int|null $rank
 * @property SavingsOpportunity|null $savingsOpportunity
 * @property 'VeryLow'|'Low'|'Medium'|'High'|null $migrationEffort
 */
class AutoScalingGroupRecommendationOption extends Shape
{
    /**
     * @param array{
     *     configuration?: AutoScalingGroupConfiguration|null,
     *     projectedUtilizationMetrics?: list<UtilizationMetric>|null,
     *     performanceRisk?: double|null,
     *     rank?: int|null,
     *     savingsOpportunity?: SavingsOpportunity|null,
     *     migrationEffort?: 'VeryLow'|'Low'|'Medium'|'High'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
