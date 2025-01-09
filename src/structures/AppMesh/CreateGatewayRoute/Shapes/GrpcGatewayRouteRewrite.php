<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GatewayRouteHostnameRewrite $hostname
 */
class GrpcGatewayRouteRewrite extends Shape
{
    /**
     * @param array{hostname?: GatewayRouteHostnameRewrite} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
