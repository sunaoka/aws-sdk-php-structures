<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IntegerParameterRange>|null $IntegerParameterRanges
 * @property list<ContinuousParameterRange>|null $ContinuousParameterRanges
 * @property list<CategoricalParameterRange>|null $CategoricalParameterRanges
 * @property list<AutoParameter>|null $AutoParameters
 */
class ParameterRanges extends Shape
{
    /**
     * @param array{
     *     IntegerParameterRanges?: list<IntegerParameterRange>|null,
     *     ContinuousParameterRanges?: list<ContinuousParameterRange>|null,
     *     CategoricalParameterRanges?: list<CategoricalParameterRange>|null,
     *     AutoParameters?: list<AutoParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
