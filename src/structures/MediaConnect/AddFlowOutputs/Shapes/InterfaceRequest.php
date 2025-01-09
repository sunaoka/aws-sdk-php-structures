<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowOutputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 */
class InterfaceRequest extends Shape
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
