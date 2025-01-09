<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualRouter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PortMapping $portMapping
 */
class VirtualRouterListener extends Shape
{
    /**
     * @param array{portMapping: PortMapping} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
