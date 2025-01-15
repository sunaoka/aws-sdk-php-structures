<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int $MaxValue
 * @property int $MinValue
 * @property 'Auto'|'Linear'|'Logarithmic'|'ReverseLogarithmic'|null $ScalingType
 */
class IntegerParameterRange extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     MaxValue: int,
     *     MinValue: int,
     *     ScalingType?: 'Auto'|'Linear'|'Logarithmic'|'ReverseLogarithmic'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
