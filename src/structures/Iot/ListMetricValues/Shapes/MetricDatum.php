<?php

namespace Sunaoka\Aws\Structures\Iot\ListMetricValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $timestamp
 * @property MetricValue|null $value
 */
class MetricDatum extends Shape
{
    /**
     * @param array{
     *     timestamp?: \Aws\Api\DateTimeResult|null,
     *     value?: MetricValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
