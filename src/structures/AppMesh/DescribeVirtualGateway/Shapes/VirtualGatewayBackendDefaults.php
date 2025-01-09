<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayClientPolicy $clientPolicy
 */
class VirtualGatewayBackendDefaults extends Shape
{
    /**
     * @param array{clientPolicy?: VirtualGatewayClientPolicy} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
