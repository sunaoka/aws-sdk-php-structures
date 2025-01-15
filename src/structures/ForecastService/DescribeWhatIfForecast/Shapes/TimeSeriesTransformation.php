<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeWhatIfForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Action|null $Action
 * @property list<TimeSeriesCondition>|null $TimeSeriesConditions
 */
class TimeSeriesTransformation extends Shape
{
    /**
     * @param array{
     *     Action?: Action|null,
     *     TimeSeriesConditions?: list<TimeSeriesCondition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
