<?php

namespace Sunaoka\Aws\Structures\Iot\ListFleetMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $metricName
 * @property string|null $metricArn
 */
class FleetMetricNameAndArn extends Shape
{
    /**
     * @param array{
     *     metricName?: string|null,
     *     metricArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
