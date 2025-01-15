<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CategoricalParameterRange>|null $CategoricalParameterRanges
 * @property list<ContinuousParameterRange>|null $ContinuousParameterRanges
 * @property list<IntegerParameterRange>|null $IntegerParameterRanges
 */
class ParameterRanges extends Shape
{
    /**
     * @param array{
     *     CategoricalParameterRanges?: list<CategoricalParameterRange>|null,
     *     ContinuousParameterRanges?: list<ContinuousParameterRange>|null,
     *     IntegerParameterRanges?: list<IntegerParameterRange>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
