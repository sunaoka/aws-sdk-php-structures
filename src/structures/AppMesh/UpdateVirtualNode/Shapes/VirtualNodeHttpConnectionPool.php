<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $maxConnections
 * @property int<1, max>|null $maxPendingRequests
 */
class VirtualNodeHttpConnectionPool extends Shape
{
    /**
     * @param array{
     *     maxConnections: int<1, max>,
     *     maxPendingRequests?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
