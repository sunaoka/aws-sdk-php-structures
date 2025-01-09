<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int $minValue
 * @property int $maxValue
 */
class IntegerHyperParameterRange extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     minValue?: int,
     *     maxValue?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
