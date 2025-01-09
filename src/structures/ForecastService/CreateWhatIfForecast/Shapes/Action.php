<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateWhatIfForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property 'ADD'|'SUBTRACT'|'MULTIPLY'|'DIVIDE' $Operation
 * @property double $Value
 */
class Action extends Shape
{
    /**
     * @param array{
     *     AttributeName: string,
     *     Operation: 'ADD'|'SUBTRACT'|'MULTIPLY'|'DIVIDE',
     *     Value: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
