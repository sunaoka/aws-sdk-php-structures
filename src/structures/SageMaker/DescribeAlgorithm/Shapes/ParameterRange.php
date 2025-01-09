<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IntegerParameterRangeSpecification $IntegerParameterRangeSpecification
 * @property ContinuousParameterRangeSpecification $ContinuousParameterRangeSpecification
 * @property CategoricalParameterRangeSpecification $CategoricalParameterRangeSpecification
 */
class ParameterRange extends Shape
{
    /**
     * @param array{
     *     IntegerParameterRangeSpecification?: IntegerParameterRangeSpecification,
     *     ContinuousParameterRangeSpecification?: ContinuousParameterRangeSpecification,
     *     CategoricalParameterRangeSpecification?: CategoricalParameterRangeSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
