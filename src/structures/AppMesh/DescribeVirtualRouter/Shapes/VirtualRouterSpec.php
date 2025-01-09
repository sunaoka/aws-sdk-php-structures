<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualRouter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<VirtualRouterListener> $listeners
 */
class VirtualRouterSpec extends Shape
{
    /**
     * @param array{listeners?: list<VirtualRouterListener>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
