<?php

namespace Sunaoka\Aws\Structures\ForecastQueryService\QueryWhatIfForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Timestamp
 * @property double $Value
 */
class DataPoint extends Shape
{
    /**
     * @param array{
     *     Timestamp?: string,
     *     Value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
