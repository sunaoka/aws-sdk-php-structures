<?php

namespace Sunaoka\Aws\Structures\ForecastQueryService\QueryForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<DataPoint>> $Predictions
 */
class Forecast extends Shape
{
    /**
     * @param array{Predictions?: array<string, list<DataPoint>>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
