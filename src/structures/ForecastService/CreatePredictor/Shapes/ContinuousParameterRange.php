<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreatePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property double $MaxValue
 * @property double $MinValue
 * @property 'Auto'|'Linear'|'Logarithmic'|'ReverseLogarithmic'|null $ScalingType
 */
class ContinuousParameterRange extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     MaxValue: double,
     *     MinValue: double,
     *     ScalingType?: 'Auto'|'Linear'|'Logarithmic'|'ReverseLogarithmic'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
