<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GatewayRouteHostnameRewrite|null $hostname
 */
class GrpcGatewayRouteRewrite extends Shape
{
    /**
     * @param array{hostname?: GatewayRouteHostnameRewrite|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
