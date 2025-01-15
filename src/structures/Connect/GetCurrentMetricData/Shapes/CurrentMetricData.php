<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CurrentMetric|null $Metric
 * @property double|null $Value
 */
class CurrentMetricData extends Shape
{
    /**
     * @param array{
     *     Metric?: CurrentMetric|null,
     *     Value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
