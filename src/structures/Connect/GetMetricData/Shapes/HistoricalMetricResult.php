<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Dimensions $Dimensions
 * @property list<HistoricalMetricData> $Collections
 */
class HistoricalMetricResult extends Shape
{
    /**
     * @param array{
     *     Dimensions?: Dimensions,
     *     Collections?: list<HistoricalMetricData>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
