<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MinValue
 * @property string $MaxValue
 */
class ContinuousParameterRangeSpecification extends Shape
{
    /**
     * @param array{
     *     MinValue: string,
     *     MaxValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
