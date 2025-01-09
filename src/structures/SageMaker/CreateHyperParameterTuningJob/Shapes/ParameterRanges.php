<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IntegerParameterRange> $IntegerParameterRanges
 * @property list<ContinuousParameterRange> $ContinuousParameterRanges
 * @property list<CategoricalParameterRange> $CategoricalParameterRanges
 * @property list<AutoParameter> $AutoParameters
 */
class ParameterRanges extends Shape
{
    /**
     * @param array{
     *     IntegerParameterRanges?: list<IntegerParameterRange>,
     *     ContinuousParameterRanges?: list<ContinuousParameterRange>,
     *     CategoricalParameterRanges?: list<CategoricalParameterRange>,
     *     AutoParameters?: list<AutoParameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
