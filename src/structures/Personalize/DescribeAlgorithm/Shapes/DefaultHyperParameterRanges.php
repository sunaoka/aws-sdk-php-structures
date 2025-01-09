<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DefaultIntegerHyperParameterRange> $integerHyperParameterRanges
 * @property list<DefaultContinuousHyperParameterRange> $continuousHyperParameterRanges
 * @property list<DefaultCategoricalHyperParameterRange> $categoricalHyperParameterRanges
 */
class DefaultHyperParameterRanges extends Shape
{
    /**
     * @param array{
     *     integerHyperParameterRanges?: list<DefaultIntegerHyperParameterRange>,
     *     continuousHyperParameterRanges?: list<DefaultContinuousHyperParameterRange>,
     *     categoricalHyperParameterRanges?: list<DefaultCategoricalHyperParameterRange>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
