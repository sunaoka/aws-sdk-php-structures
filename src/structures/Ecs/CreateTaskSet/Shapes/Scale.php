<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateTaskSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $value
 * @property 'PERCENT' $unit
 */
class Scale extends Shape
{
    /**
     * @param array{
     *     value?: double,
     *     unit?: 'PERCENT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
