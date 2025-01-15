<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetUsageForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateInterval|null $TimePeriod
 * @property string|null $MeanValue
 * @property string|null $PredictionIntervalLowerBound
 * @property string|null $PredictionIntervalUpperBound
 */
class ForecastResult extends Shape
{
    /**
     * @param array{
     *     TimePeriod?: DateInterval|null,
     *     MeanValue?: string|null,
     *     PredictionIntervalLowerBound?: string|null,
     *     PredictionIntervalUpperBound?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
