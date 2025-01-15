<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000>|null $PeriodsForward
 * @property int<0, 1000>|null $PeriodsBackward
 * @property double|null $UpperBoundary
 * @property double|null $LowerBoundary
 * @property int<50, 95>|null $PredictionInterval
 * @property int<1, 180>|null $Seasonality
 */
class TimeBasedForecastProperties extends Shape
{
    /**
     * @param array{
     *     PeriodsForward?: int<1, 1000>|null,
     *     PeriodsBackward?: int<0, 1000>|null,
     *     UpperBoundary?: double|null,
     *     LowerBoundary?: double|null,
     *     PredictionInterval?: int<50, 95>|null,
     *     Seasonality?: int<1, 180>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
