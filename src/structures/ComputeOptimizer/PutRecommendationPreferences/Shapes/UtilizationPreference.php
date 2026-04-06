<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\PutRecommendationPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CpuUtilization'|'MemoryUtilization'|null $metricName
 * @property CustomizableMetricParameters|null $metricParameters
 */
class UtilizationPreference extends Shape
{
    /**
     * @param array{
     *     metricName?: 'CpuUtilization'|'MemoryUtilization'|null,
     *     metricParameters?: CustomizableMetricParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
