<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateWhatIfAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimeSeriesIdentifiers $TimeSeriesIdentifiers
 */
class TimeSeriesSelector extends Shape
{
    /**
     * @param array{TimeSeriesIdentifiers?: TimeSeriesIdentifiers} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
