<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxRequests
 */
class VirtualNodeGrpcConnectionPool extends Shape
{
    /**
     * @param array{maxRequests: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
