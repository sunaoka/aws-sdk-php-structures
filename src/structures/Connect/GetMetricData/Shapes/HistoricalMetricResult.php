<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Dimensions|null $Dimensions
 * @property list<HistoricalMetricData>|null $Collections
 */
class HistoricalMetricResult extends Shape
{
    /**
     * @param array{
     *     Dimensions?: Dimensions|null,
     *     Collections?: list<HistoricalMetricData>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
