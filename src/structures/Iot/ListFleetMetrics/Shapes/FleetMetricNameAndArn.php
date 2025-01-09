<?php

namespace Sunaoka\Aws\Structures\Iot\ListFleetMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metricName
 * @property string $metricArn
 */
class FleetMetricNameAndArn extends Shape
{
    /**
     * @param array{
     *     metricName?: string,
     *     metricArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
