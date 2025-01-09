<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 */
class InterfaceShape extends Shape
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
