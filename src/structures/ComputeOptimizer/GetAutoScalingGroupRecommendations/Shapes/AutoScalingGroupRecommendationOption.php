<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoScalingGroupConfiguration $configuration
 * @property GpuInfo $instanceGpuInfo
 * @property list<UtilizationMetric> $projectedUtilizationMetrics
 * @property double $performanceRisk
 * @property int $rank
 * @property SavingsOpportunity $savingsOpportunity
 * @property AutoScalingGroupSavingsOpportunityAfterDiscounts $savingsOpportunityAfterDiscounts
 * @property 'VeryLow'|'Low'|'Medium'|'High' $migrationEffort
 */
class AutoScalingGroupRecommendationOption extends Shape
{
    /**
     * @param array{
     *     configuration?: AutoScalingGroupConfiguration,
     *     instanceGpuInfo?: GpuInfo,
     *     projectedUtilizationMetrics?: list<UtilizationMetric>,
     *     performanceRisk?: double,
     *     rank?: int,
     *     savingsOpportunity?: SavingsOpportunity,
     *     savingsOpportunityAfterDiscounts?: AutoScalingGroupSavingsOpportunityAfterDiscounts,
     *     migrationEffort?: 'VeryLow'|'Low'|'Medium'|'High'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
