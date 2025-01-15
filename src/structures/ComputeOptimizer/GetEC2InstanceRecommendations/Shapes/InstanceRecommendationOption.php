<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $instanceType
 * @property GpuInfo|null $instanceGpuInfo
 * @property list<UtilizationMetric>|null $projectedUtilizationMetrics
 * @property list<'Hypervisor'|'NetworkInterface'|'StorageInterface'|'InstanceStoreAvailability'|'VirtualizationType'|'Architecture'>|null $platformDifferences
 * @property double|null $performanceRisk
 * @property int|null $rank
 * @property SavingsOpportunity|null $savingsOpportunity
 * @property InstanceSavingsOpportunityAfterDiscounts|null $savingsOpportunityAfterDiscounts
 * @property 'VeryLow'|'Low'|'Medium'|'High'|null $migrationEffort
 */
class InstanceRecommendationOption extends Shape
{
    /**
     * @param array{
     *     instanceType?: string|null,
     *     instanceGpuInfo?: GpuInfo|null,
     *     projectedUtilizationMetrics?: list<UtilizationMetric>|null,
     *     platformDifferences?: list<'Hypervisor'|'NetworkInterface'|'StorageInterface'|'InstanceStoreAvailability'|'VirtualizationType'|'Architecture'>|null,
     *     performanceRisk?: double|null,
     *     rank?: int|null,
     *     savingsOpportunity?: SavingsOpportunity|null,
     *     savingsOpportunityAfterDiscounts?: InstanceSavingsOpportunityAfterDiscounts|null,
     *     migrationEffort?: 'VeryLow'|'Low'|'Medium'|'High'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
