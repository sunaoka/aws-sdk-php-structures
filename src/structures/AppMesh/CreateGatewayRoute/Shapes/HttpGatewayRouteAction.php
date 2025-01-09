<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpGatewayRouteRewrite $rewrite
 * @property GatewayRouteTarget $target
 */
class HttpGatewayRouteAction extends Shape
{
    /**
     * @param array{
     *     rewrite?: HttpGatewayRouteRewrite,
     *     target: GatewayRouteTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
