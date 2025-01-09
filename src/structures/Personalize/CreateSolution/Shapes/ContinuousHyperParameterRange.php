<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property double $minValue
 * @property double $maxValue
 */
class ContinuousHyperParameterRange extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     minValue?: double,
     *     maxValue?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
