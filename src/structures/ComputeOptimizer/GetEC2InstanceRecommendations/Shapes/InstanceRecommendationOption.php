<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceType
 * @property GpuInfo $instanceGpuInfo
 * @property list<UtilizationMetric> $projectedUtilizationMetrics
 * @property list<'Hypervisor'|'NetworkInterface'|'StorageInterface'|'InstanceStoreAvailability'|'VirtualizationType'|'Architecture'> $platformDifferences
 * @property double $performanceRisk
 * @property int $rank
 * @property SavingsOpportunity $savingsOpportunity
 * @property InstanceSavingsOpportunityAfterDiscounts $savingsOpportunityAfterDiscounts
 * @property 'VeryLow'|'Low'|'Medium'|'High' $migrationEffort
 */
class InstanceRecommendationOption extends Shape
{
    /**
     * @param array{
     *     instanceType?: string,
     *     instanceGpuInfo?: GpuInfo,
     *     projectedUtilizationMetrics?: list<UtilizationMetric>,
     *     platformDifferences?: list<'Hypervisor'|'NetworkInterface'|'StorageInterface'|'InstanceStoreAvailability'|'VirtualizationType'|'Architecture'>,
     *     performanceRisk?: double,
     *     rank?: int,
     *     savingsOpportunity?: SavingsOpportunity,
     *     savingsOpportunityAfterDiscounts?: InstanceSavingsOpportunityAfterDiscounts,
     *     migrationEffort?: 'VeryLow'|'Low'|'Medium'|'High'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
