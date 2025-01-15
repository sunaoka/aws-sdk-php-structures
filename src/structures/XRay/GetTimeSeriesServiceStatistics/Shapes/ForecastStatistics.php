<?php

namespace Sunaoka\Aws\Structures\XRay\GetTimeSeriesServiceStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $FaultCountHigh
 * @property int|null $FaultCountLow
 */
class ForecastStatistics extends Shape
{
    /**
     * @param array{
     *     FaultCountHigh?: int|null,
     *     FaultCountLow?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
