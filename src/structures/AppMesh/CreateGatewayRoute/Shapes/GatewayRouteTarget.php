<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535>|null $port
 * @property GatewayRouteVirtualService $virtualService
 */
class GatewayRouteTarget extends Shape
{
    /**
     * @param array{
     *     port?: int<1, 65535>|null,
     *     virtualService: GatewayRouteVirtualService
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
