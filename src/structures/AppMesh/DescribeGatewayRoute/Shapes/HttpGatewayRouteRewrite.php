<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GatewayRouteHostnameRewrite $hostname
 * @property HttpGatewayRoutePathRewrite $path
 * @property HttpGatewayRoutePrefixRewrite $prefix
 */
class HttpGatewayRouteRewrite extends Shape
{
    /**
     * @param array{
     *     hostname?: GatewayRouteHostnameRewrite,
     *     path?: HttpGatewayRoutePathRewrite,
     *     prefix?: HttpGatewayRoutePrefixRewrite
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
