<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualRouter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'INACTIVE'|'DELETED' $status
 */
class VirtualRouterStatus extends Shape
{
    /**
     * @param array{status: 'ACTIVE'|'INACTIVE'|'DELETED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
