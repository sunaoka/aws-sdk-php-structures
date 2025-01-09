<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 's'|'ms' $unit
 * @property int<0, max> $value
 */
class Duration extends Shape
{
    /**
     * @param array{
     *     unit?: 's'|'ms',
     *     value?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
