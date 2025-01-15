<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property int<-1000000, max>|null $minValue
 * @property int<min, 1000000>|null $maxValue
 */
class IntegerHyperParameterRange extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     minValue?: int<-1000000, max>|null,
     *     maxValue?: int<min, 1000000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
