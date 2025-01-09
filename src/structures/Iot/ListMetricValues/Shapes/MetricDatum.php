<?php

namespace Sunaoka\Aws\Structures\Iot\ListMetricValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property MetricValue $value
 */
class MetricDatum extends Shape
{
    /**
     * @param array{
     *     timestamp?: \Aws\Api\DateTimeResult,
     *     value?: MetricValue
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
