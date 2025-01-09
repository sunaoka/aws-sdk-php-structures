<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrpcGatewayRouteRewrite $rewrite
 * @property GatewayRouteTarget $target
 */
class GrpcGatewayRouteAction extends Shape
{
    /**
     * @param array{
     *     rewrite?: GrpcGatewayRouteRewrite,
     *     target: GatewayRouteTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
