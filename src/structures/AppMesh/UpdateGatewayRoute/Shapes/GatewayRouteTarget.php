<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $port
 * @property GatewayRouteVirtualService $virtualService
 */
class GatewayRouteTarget extends Shape
{
    /**
     * @param array{
     *     port?: int,
     *     virtualService: GatewayRouteVirtualService
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
