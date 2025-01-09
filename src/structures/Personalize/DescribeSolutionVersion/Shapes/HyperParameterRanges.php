<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolutionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IntegerHyperParameterRange> $integerHyperParameterRanges
 * @property list<ContinuousHyperParameterRange> $continuousHyperParameterRanges
 * @property list<CategoricalHyperParameterRange> $categoricalHyperParameterRanges
 */
class HyperParameterRanges extends Shape
{
    /**
     * @param array{
     *     integerHyperParameterRanges?: list<IntegerHyperParameterRange>,
     *     continuousHyperParameterRanges?: list<ContinuousHyperParameterRange>,
     *     categoricalHyperParameterRanges?: list<CategoricalHyperParameterRange>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
