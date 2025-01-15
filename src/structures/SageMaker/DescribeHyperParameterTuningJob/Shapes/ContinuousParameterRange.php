<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $MinValue
 * @property string $MaxValue
 * @property 'Auto'|'Linear'|'Logarithmic'|'ReverseLogarithmic'|null $ScalingType
 */
class ContinuousParameterRange extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     MinValue: string,
     *     MaxValue: string,
     *     ScalingType?: 'Auto'|'Linear'|'Logarithmic'|'ReverseLogarithmic'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
