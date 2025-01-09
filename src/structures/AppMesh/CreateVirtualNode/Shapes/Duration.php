<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 's'|'ms' $unit
 * @property int $value
 */
class Duration extends Shape
{
    /**
     * @param array{
     *     unit?: 's'|'ms',
     *     value?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
