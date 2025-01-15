<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayAccessLog|null $accessLog
 */
class VirtualGatewayLogging extends Shape
{
    /**
     * @param array{accessLog?: VirtualGatewayAccessLog|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
