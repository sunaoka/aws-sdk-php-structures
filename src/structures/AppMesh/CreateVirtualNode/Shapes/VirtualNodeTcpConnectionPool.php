<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxConnections
 */
class VirtualNodeTcpConnectionPool extends Shape
{
    /**
     * @param array{maxConnections: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
