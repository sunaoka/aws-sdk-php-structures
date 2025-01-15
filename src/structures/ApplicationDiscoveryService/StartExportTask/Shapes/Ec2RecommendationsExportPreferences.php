<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property UsageMetricBasis|null $cpuPerformanceMetricBasis
 * @property UsageMetricBasis|null $ramPerformanceMetricBasis
 * @property 'DEDICATED'|'SHARED'|null $tenancy
 * @property list<string>|null $excludedInstanceTypes
 * @property string|null $preferredRegion
 * @property ReservedInstanceOptions|null $reservedInstanceOptions
 */
class Ec2RecommendationsExportPreferences extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     cpuPerformanceMetricBasis?: UsageMetricBasis|null,
     *     ramPerformanceMetricBasis?: UsageMetricBasis|null,
     *     tenancy?: 'DEDICATED'|'SHARED'|null,
     *     excludedInstanceTypes?: list<string>|null,
     *     preferredRegion?: string|null,
     *     reservedInstanceOptions?: ReservedInstanceOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
