<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayAccessLog $accessLog
 */
class VirtualGatewayLogging extends Shape
{
    /**
     * @param array{accessLog?: VirtualGatewayAccessLog} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
