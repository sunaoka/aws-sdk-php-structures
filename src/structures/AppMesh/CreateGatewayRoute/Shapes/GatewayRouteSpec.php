<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrpcGatewayRoute $grpcRoute
 * @property HttpGatewayRoute $http2Route
 * @property HttpGatewayRoute $httpRoute
 * @property int $priority
 */
class GatewayRouteSpec extends Shape
{
    /**
     * @param array{
     *     grpcRoute?: GrpcGatewayRoute,
     *     http2Route?: HttpGatewayRoute,
     *     httpRoute?: HttpGatewayRoute,
     *     priority?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
