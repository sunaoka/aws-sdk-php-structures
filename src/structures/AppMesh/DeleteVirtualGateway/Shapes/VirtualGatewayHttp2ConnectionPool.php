<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxRequests
 */
class VirtualGatewayHttp2ConnectionPool extends Shape
{
    /**
     * @param array{maxRequests: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
