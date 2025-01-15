<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayBackendDefaults|null $backendDefaults
 * @property list<VirtualGatewayListener> $listeners
 * @property VirtualGatewayLogging|null $logging
 */
class VirtualGatewaySpec extends Shape
{
    /**
     * @param array{
     *     backendDefaults?: VirtualGatewayBackendDefaults|null,
     *     listeners: list<VirtualGatewayListener>,
     *     logging?: VirtualGatewayLogging|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
