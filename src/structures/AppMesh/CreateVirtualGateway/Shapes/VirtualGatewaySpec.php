<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayBackendDefaults $backendDefaults
 * @property list<VirtualGatewayListener> $listeners
 * @property VirtualGatewayLogging $logging
 */
class VirtualGatewaySpec extends Shape
{
    /**
     * @param array{
     *     backendDefaults?: VirtualGatewayBackendDefaults,
     *     listeners: list<VirtualGatewayListener>,
     *     logging?: VirtualGatewayLogging
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
