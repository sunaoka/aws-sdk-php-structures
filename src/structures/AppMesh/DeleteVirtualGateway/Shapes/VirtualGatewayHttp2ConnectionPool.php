<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $maxRequests
 */
class VirtualGatewayHttp2ConnectionPool extends Shape
{
    /**
     * @param array{maxRequests: int<1, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
