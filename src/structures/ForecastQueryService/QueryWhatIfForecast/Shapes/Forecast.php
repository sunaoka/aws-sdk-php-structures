<?php

namespace Sunaoka\Aws\Structures\ForecastQueryService\QueryWhatIfForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<DataPoint>>|null $Predictions
 */
class Forecast extends Shape
{
    /**
     * @param array{Predictions?: array<string, list<DataPoint>>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
