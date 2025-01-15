<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IntegerHyperParameterRange>|null $integerHyperParameterRanges
 * @property list<ContinuousHyperParameterRange>|null $continuousHyperParameterRanges
 * @property list<CategoricalHyperParameterRange>|null $categoricalHyperParameterRanges
 */
class HyperParameterRanges extends Shape
{
    /**
     * @param array{
     *     integerHyperParameterRanges?: list<IntegerHyperParameterRange>|null,
     *     continuousHyperParameterRanges?: list<ContinuousHyperParameterRange>|null,
     *     categoricalHyperParameterRanges?: list<CategoricalHyperParameterRange>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
