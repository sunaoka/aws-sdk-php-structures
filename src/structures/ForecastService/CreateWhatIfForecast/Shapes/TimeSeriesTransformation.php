<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateWhatIfForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Action $Action
 * @property list<TimeSeriesCondition> $TimeSeriesConditions
 */
class TimeSeriesTransformation extends Shape
{
    /**
     * @param array{
     *     Action?: Action,
     *     TimeSeriesConditions?: list<TimeSeriesCondition>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
