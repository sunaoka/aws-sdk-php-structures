<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HistoricalMetric $Metric
 * @property double $Value
 */
class HistoricalMetricData extends Shape
{
    /**
     * @param array{
     *     Metric?: HistoricalMetric,
     *     Value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
