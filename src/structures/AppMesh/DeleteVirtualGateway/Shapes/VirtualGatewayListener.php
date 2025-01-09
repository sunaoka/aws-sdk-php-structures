<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayConnectionPool $connectionPool
 * @property VirtualGatewayHealthCheckPolicy $healthCheck
 * @property VirtualGatewayPortMapping $portMapping
 * @property VirtualGatewayListenerTls $tls
 */
class VirtualGatewayListener extends Shape
{
    /**
     * @param array{
     *     connectionPool?: VirtualGatewayConnectionPool,
     *     healthCheck?: VirtualGatewayHealthCheckPolicy,
     *     portMapping: VirtualGatewayPortMapping,
     *     tls?: VirtualGatewayListenerTls
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
