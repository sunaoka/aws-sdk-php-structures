<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DefaultIntegerHyperParameterRange>|null $integerHyperParameterRanges
 * @property list<DefaultContinuousHyperParameterRange>|null $continuousHyperParameterRanges
 * @property list<DefaultCategoricalHyperParameterRange>|null $categoricalHyperParameterRanges
 */
class DefaultHyperParameterRanges extends Shape
{
    /**
     * @param array{
     *     integerHyperParameterRanges?: list<DefaultIntegerHyperParameterRange>|null,
     *     continuousHyperParameterRanges?: list<DefaultContinuousHyperParameterRange>|null,
     *     categoricalHyperParameterRanges?: list<DefaultCategoricalHyperParameterRange>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
