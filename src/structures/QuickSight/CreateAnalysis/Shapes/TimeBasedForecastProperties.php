<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000> $PeriodsForward
 * @property int<0, 1000> $PeriodsBackward
 * @property double $UpperBoundary
 * @property double $LowerBoundary
 * @property int<50, 95> $PredictionInterval
 * @property int<1, 180> $Seasonality
 */
class TimeBasedForecastProperties extends Shape
{
    /**
     * @param array{
     *     PeriodsForward?: int<1, 1000>,
     *     PeriodsBackward?: int<0, 1000>,
     *     UpperBoundary?: double,
     *     LowerBoundary?: double,
     *     PredictionInterval?: int<50, 95>,
     *     Seasonality?: int<1, 180>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
