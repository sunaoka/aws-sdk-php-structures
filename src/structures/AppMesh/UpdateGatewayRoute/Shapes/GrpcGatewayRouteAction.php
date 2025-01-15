<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrpcGatewayRouteRewrite|null $rewrite
 * @property GatewayRouteTarget $target
 */
class GrpcGatewayRouteAction extends Shape
{
    /**
     * @param array{
     *     rewrite?: GrpcGatewayRouteRewrite|null,
     *     target: GatewayRouteTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
