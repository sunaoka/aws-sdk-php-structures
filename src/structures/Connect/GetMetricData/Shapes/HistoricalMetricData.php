<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HistoricalMetric|null $Metric
 * @property double|null $Value
 */
class HistoricalMetricData extends Shape
{
    /**
     * @param array{
     *     Metric?: HistoricalMetric|null,
     *     Value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
