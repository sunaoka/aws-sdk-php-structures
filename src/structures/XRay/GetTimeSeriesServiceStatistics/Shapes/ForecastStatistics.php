<?php

namespace Sunaoka\Aws\Structures\XRay\GetTimeSeriesServiceStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FaultCountHigh
 * @property int $FaultCountLow
 */
class ForecastStatistics extends Shape
{
    /**
     * @param array{
     *     FaultCountHigh?: int,
     *     FaultCountLow?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
