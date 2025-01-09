<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $maxRequests
 */
class VirtualNodeGrpcConnectionPool extends Shape
{
    /**
     * @param array{maxRequests: int<1, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
