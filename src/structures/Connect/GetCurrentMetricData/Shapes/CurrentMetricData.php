<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CurrentMetric $Metric
 * @property double $Value
 */
class CurrentMetricData extends Shape
{
    /**
     * @param array{
     *     Metric?: CurrentMetric,
     *     Value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
