<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GatewayRouteHostnameRewrite|null $hostname
 * @property HttpGatewayRoutePathRewrite|null $path
 * @property HttpGatewayRoutePrefixRewrite|null $prefix
 */
class HttpGatewayRouteRewrite extends Shape
{
    /**
     * @param array{
     *     hostname?: GatewayRouteHostnameRewrite|null,
     *     path?: HttpGatewayRoutePathRewrite|null,
     *     prefix?: HttpGatewayRoutePrefixRewrite|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
