<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxConnections
 * @property int $maxPendingRequests
 */
class VirtualGatewayHttpConnectionPool extends Shape
{
    /**
     * @param array{
     *     maxConnections: int,
     *     maxPendingRequests?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
