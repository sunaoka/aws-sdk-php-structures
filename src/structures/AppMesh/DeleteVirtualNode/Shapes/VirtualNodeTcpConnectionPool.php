<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $maxConnections
 */
class VirtualNodeTcpConnectionPool extends Shape
{
    /**
     * @param array{maxConnections: int<1, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
