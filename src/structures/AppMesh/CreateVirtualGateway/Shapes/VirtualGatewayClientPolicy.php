<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayClientPolicyTls|null $tls
 */
class VirtualGatewayClientPolicy extends Shape
{
    /**
     * @param array{tls?: VirtualGatewayClientPolicyTls|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
