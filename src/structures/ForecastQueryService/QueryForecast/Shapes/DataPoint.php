<?php

namespace Sunaoka\Aws\Structures\ForecastQueryService\QueryForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Timestamp
 * @property double|null $Value
 */
class DataPoint extends Shape
{
    /**
     * @param array{
     *     Timestamp?: string|null,
     *     Value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
