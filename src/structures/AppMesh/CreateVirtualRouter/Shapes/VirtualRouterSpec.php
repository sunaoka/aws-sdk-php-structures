<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualRouter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<VirtualRouterListener>|null $listeners
 */
class VirtualRouterSpec extends Shape
{
    /**
     * @param array{listeners?: list<VirtualRouterListener>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
