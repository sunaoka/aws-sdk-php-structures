<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AWS_ARM64'|'CURRENT'>|null $cpuVendorArchitectures
 * @property 'Active'|'Inactive'|null $enhancedInfrastructureMetrics
 * @property 'DAYS_14'|'DAYS_32'|'DAYS_93'|null $lookBackPeriod
 * @property RDSSavingsEstimationMode|null $savingsEstimationMode
 */
class RDSEffectiveRecommendationPreferences extends Shape
{
    /**
     * @param array{
     *     cpuVendorArchitectures?: list<'AWS_ARM64'|'CURRENT'>|null,
     *     enhancedInfrastructureMetrics?: 'Active'|'Inactive'|null,
     *     lookBackPeriod?: 'DAYS_14'|'DAYS_32'|'DAYS_93'|null,
     *     savingsEstimationMode?: RDSSavingsEstimationMode|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
