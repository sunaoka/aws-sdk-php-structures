<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpGatewayRouteAction $action
 * @property HttpGatewayRouteMatch $match
 */
class HttpGatewayRoute extends Shape
{
    /**
     * @param array{
     *     action: HttpGatewayRouteAction,
     *     match: HttpGatewayRouteMatch
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
