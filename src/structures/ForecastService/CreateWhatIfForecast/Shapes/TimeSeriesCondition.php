<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateWhatIfForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property string $AttributeValue
 * @property 'EQUALS'|'NOT_EQUALS'|'LESS_THAN'|'GREATER_THAN' $Condition
 */
class TimeSeriesCondition extends Shape
{
    /**
     * @param array{
     *     AttributeName: string,
     *     AttributeValue: string,
     *     Condition: 'EQUALS'|'NOT_EQUALS'|'LESS_THAN'|'GREATER_THAN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
