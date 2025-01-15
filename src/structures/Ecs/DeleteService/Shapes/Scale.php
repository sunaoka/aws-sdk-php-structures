<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $value
 * @property 'PERCENT'|null $unit
 */
class Scale extends Shape
{
    /**
     * @param array{
     *     value?: double|null,
     *     unit?: 'PERCENT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
