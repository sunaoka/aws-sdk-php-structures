<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Selector
 */
class ObjectReference extends Shape
{
    /**
     * @param array{Selector?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
