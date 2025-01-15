<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property double|null $minValue
 * @property double|null $maxValue
 */
class ContinuousHyperParameterRange extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     minValue?: double|null,
     *     maxValue?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
