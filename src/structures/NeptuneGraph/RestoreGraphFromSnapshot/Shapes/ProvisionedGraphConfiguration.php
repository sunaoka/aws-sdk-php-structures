<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\RestoreGraphFromSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 24576> $memory
 */
class ProvisionedGraphConfiguration extends Shape
{
    /**
     * @param array{memory: int<1, 24576>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
