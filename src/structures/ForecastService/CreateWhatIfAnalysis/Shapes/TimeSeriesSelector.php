<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateWhatIfAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimeSeriesIdentifiers|null $TimeSeriesIdentifiers
 */
class TimeSeriesSelector extends Shape
{
    /**
     * @param array{TimeSeriesIdentifiers?: TimeSeriesIdentifiers|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
