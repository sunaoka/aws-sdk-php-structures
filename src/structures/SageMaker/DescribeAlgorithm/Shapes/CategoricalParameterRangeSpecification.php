<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Values
 */
class CategoricalParameterRangeSpecification extends Shape
{
    /**
     * @param array{Values: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
