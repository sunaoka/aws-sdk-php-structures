<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AWS_ARM64'|'CURRENT'> $cpuVendorArchitectures
 * @property 'Active'|'Inactive' $enhancedInfrastructureMetrics
 * @property 'Active'|'Inactive' $inferredWorkloadTypes
 * @property ExternalMetricsPreference $externalMetricsPreference
 * @property 'DAYS_14'|'DAYS_32'|'DAYS_93' $lookBackPeriod
 * @property list<UtilizationPreference> $utilizationPreferences
 * @property list<EffectivePreferredResource> $preferredResources
 * @property InstanceSavingsEstimationMode $savingsEstimationMode
 */
class EffectiveRecommendationPreferences extends Shape
{
    /**
     * @param array{
     *     cpuVendorArchitectures?: list<'AWS_ARM64'|'CURRENT'>,
     *     enhancedInfrastructureMetrics?: 'Active'|'Inactive',
     *     inferredWorkloadTypes?: 'Active'|'Inactive',
     *     externalMetricsPreference?: ExternalMetricsPreference,
     *     lookBackPeriod?: 'DAYS_14'|'DAYS_32'|'DAYS_93',
     *     utilizationPreferences?: list<UtilizationPreference>,
     *     preferredResources?: list<EffectivePreferredResource>,
     *     savingsEstimationMode?: InstanceSavingsEstimationMode
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
