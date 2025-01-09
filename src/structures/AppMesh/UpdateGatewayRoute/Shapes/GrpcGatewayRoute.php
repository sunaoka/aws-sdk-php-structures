<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrpcGatewayRouteAction $action
 * @property GrpcGatewayRouteMatch $match
 */
class GrpcGatewayRoute extends Shape
{
    /**
     * @param array{
     *     action: GrpcGatewayRouteAction,
     *     match: GrpcGatewayRouteMatch
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
