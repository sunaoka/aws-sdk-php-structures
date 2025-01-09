<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AWS_ARM64'|'CURRENT'> $cpuVendorArchitectures
 * @property 'Active'|'Inactive' $enhancedInfrastructureMetrics
 * @property 'DAYS_14'|'DAYS_32'|'DAYS_93' $lookBackPeriod
 * @property RDSSavingsEstimationMode $savingsEstimationMode
 */
class RDSEffectiveRecommendationPreferences extends Shape
{
    /**
     * @param array{
     *     cpuVendorArchitectures?: list<'AWS_ARM64'|'CURRENT'>,
     *     enhancedInfrastructureMetrics?: 'Active'|'Inactive',
     *     lookBackPeriod?: 'DAYS_14'|'DAYS_32'|'DAYS_93',
     *     savingsEstimationMode?: RDSSavingsEstimationMode
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
