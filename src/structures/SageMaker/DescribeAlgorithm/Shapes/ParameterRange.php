<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IntegerParameterRangeSpecification|null $IntegerParameterRangeSpecification
 * @property ContinuousParameterRangeSpecification|null $ContinuousParameterRangeSpecification
 * @property CategoricalParameterRangeSpecification|null $CategoricalParameterRangeSpecification
 */
class ParameterRange extends Shape
{
    /**
     * @param array{
     *     IntegerParameterRangeSpecification?: IntegerParameterRangeSpecification|null,
     *     ContinuousParameterRangeSpecification?: ContinuousParameterRangeSpecification|null,
     *     CategoricalParameterRangeSpecification?: CategoricalParameterRangeSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
