<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CategoricalParameterRange> $CategoricalParameterRanges
 * @property list<ContinuousParameterRange> $ContinuousParameterRanges
 * @property list<IntegerParameterRange> $IntegerParameterRanges
 */
class ParameterRanges extends Shape
{
    /**
     * @param array{
     *     CategoricalParameterRanges?: list<CategoricalParameterRange>,
     *     ContinuousParameterRanges?: list<ContinuousParameterRange>,
     *     IntegerParameterRanges?: list<IntegerParameterRange>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
