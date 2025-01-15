<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpGatewayRouteRewrite|null $rewrite
 * @property GatewayRouteTarget $target
 */
class HttpGatewayRouteAction extends Shape
{
    /**
     * @param array{
     *     rewrite?: HttpGatewayRouteRewrite|null,
     *     target: GatewayRouteTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
