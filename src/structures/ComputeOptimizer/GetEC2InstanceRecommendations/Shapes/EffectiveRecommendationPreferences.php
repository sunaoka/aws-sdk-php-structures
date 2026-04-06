<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AWS_ARM64'|'CURRENT'>|null $cpuVendorArchitectures
 * @property 'Active'|'Inactive'|null $enhancedInfrastructureMetrics
 * @property 'Active'|'Inactive'|null $inferredWorkloadTypes
 * @property ExternalMetricsPreference|null $externalMetricsPreference
 * @property 'DAYS_14'|'DAYS_32'|'DAYS_93'|null $lookBackPeriod
 * @property list<UtilizationPreference>|null $utilizationPreferences
 * @property list<EffectivePreferredResource>|null $preferredResources
 * @property InstanceSavingsEstimationMode|null $savingsEstimationMode
 */
class EffectiveRecommendationPreferences extends Shape
{
    /**
     * @param array{
     *     cpuVendorArchitectures?: list<'AWS_ARM64'|'CURRENT'>|null,
     *     enhancedInfrastructureMetrics?: 'Active'|'Inactive'|null,
     *     inferredWorkloadTypes?: 'Active'|'Inactive'|null,
     *     externalMetricsPreference?: ExternalMetricsPreference|null,
     *     lookBackPeriod?: 'DAYS_14'|'DAYS_32'|'DAYS_93'|null,
     *     utilizationPreferences?: list<UtilizationPreference>|null,
     *     preferredResources?: list<EffectivePreferredResource>|null,
     *     savingsEstimationMode?: InstanceSavingsEstimationMode|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
