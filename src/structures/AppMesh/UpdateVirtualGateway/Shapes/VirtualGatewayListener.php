<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayConnectionPool|null $connectionPool
 * @property VirtualGatewayHealthCheckPolicy|null $healthCheck
 * @property VirtualGatewayPortMapping $portMapping
 * @property VirtualGatewayListenerTls|null $tls
 */
class VirtualGatewayListener extends Shape
{
    /**
     * @param array{
     *     connectionPool?: VirtualGatewayConnectionPool|null,
     *     healthCheck?: VirtualGatewayHealthCheckPolicy|null,
     *     portMapping: VirtualGatewayPortMapping,
     *     tls?: VirtualGatewayListenerTls|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
