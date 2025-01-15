<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayClientPolicy|null $clientPolicy
 */
class VirtualGatewayBackendDefaults extends Shape
{
    /**
     * @param array{clientPolicy?: VirtualGatewayClientPolicy|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
