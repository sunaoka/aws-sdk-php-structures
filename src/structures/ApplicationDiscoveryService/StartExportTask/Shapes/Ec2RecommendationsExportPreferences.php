<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property UsageMetricBasis $cpuPerformanceMetricBasis
 * @property UsageMetricBasis $ramPerformanceMetricBasis
 * @property 'DEDICATED'|'SHARED' $tenancy
 * @property list<string> $excludedInstanceTypes
 * @property string $preferredRegion
 * @property ReservedInstanceOptions $reservedInstanceOptions
 */
class Ec2RecommendationsExportPreferences extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     cpuPerformanceMetricBasis?: UsageMetricBasis,
     *     ramPerformanceMetricBasis?: UsageMetricBasis,
     *     tenancy?: 'DEDICATED'|'SHARED',
     *     excludedInstanceTypes?: list<string>,
     *     preferredRegion?: string,
     *     reservedInstanceOptions?: ReservedInstanceOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
