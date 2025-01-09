<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetUsageForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateInterval $TimePeriod
 * @property string $MeanValue
 * @property string $PredictionIntervalLowerBound
 * @property string $PredictionIntervalUpperBound
 */
class ForecastResult extends Shape
{
    /**
     * @param array{
     *     TimePeriod?: DateInterval,
     *     MeanValue?: string,
     *     PredictionIntervalLowerBound?: string,
     *     PredictionIntervalUpperBound?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
