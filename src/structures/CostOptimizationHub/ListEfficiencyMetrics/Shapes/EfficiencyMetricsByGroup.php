<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListEfficiencyMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MetricsByTime>|null $metricsByTime
 * @property string|null $group
 * @property string|null $message
 */
class EfficiencyMetricsByGroup extends Shape
{
    /**
     * @param array{
     *     metricsByTime?: list<MetricsByTime>|null,
     *     group?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
