<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PeriodsForward
 * @property int $PeriodsBackward
 * @property double $UpperBoundary
 * @property double $LowerBoundary
 * @property int $PredictionInterval
 * @property int $Seasonality
 */
class TimeBasedForecastProperties extends Shape
{
    /**
     * @param array{
     *     PeriodsForward?: int,
     *     PeriodsBackward?: int,
     *     UpperBoundary?: double,
     *     LowerBoundary?: double,
     *     PredictionInterval?: int,
     *     Seasonality?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
