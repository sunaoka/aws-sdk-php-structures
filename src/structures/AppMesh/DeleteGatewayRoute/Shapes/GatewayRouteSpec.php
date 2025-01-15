<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrpcGatewayRoute|null $grpcRoute
 * @property HttpGatewayRoute|null $http2Route
 * @property HttpGatewayRoute|null $httpRoute
 * @property int<0, 1000>|null $priority
 */
class GatewayRouteSpec extends Shape
{
    /**
     * @param array{
     *     grpcRoute?: GrpcGatewayRoute|null,
     *     http2Route?: HttpGatewayRoute|null,
     *     httpRoute?: HttpGatewayRoute|null,
     *     priority?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
