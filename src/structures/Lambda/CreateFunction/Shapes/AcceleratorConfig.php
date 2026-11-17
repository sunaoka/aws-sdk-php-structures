<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AcceleratorMemorySize
 */
class AcceleratorConfig extends Shape
{
    /**
     * @param array{AcceleratorMemorySize: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
