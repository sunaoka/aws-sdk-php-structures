<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CpuUtilization'|'MemoryUtilization' $metricName
 * @property CustomizableMetricParameters $metricParameters
 */
class UtilizationPreference extends Shape
{
    /**
     * @param array{
     *     metricName?: 'CpuUtilization'|'MemoryUtilization',
     *     metricParameters?: CustomizableMetricParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
