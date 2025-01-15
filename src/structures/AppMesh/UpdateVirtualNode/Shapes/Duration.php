<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 's'|'ms'|null $unit
 * @property int<0, max>|null $value
 */
class Duration extends Shape
{
    /**
     * @param array{
     *     unit?: 's'|'ms'|null,
     *     value?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
