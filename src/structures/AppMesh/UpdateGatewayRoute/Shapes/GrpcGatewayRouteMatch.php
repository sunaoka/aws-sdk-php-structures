<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GatewayRouteHostnameMatch $hostname
 * @property list<GrpcGatewayRouteMetadata> $metadata
 * @property int<1, 65535> $port
 * @property string $serviceName
 */
class GrpcGatewayRouteMatch extends Shape
{
    /**
     * @param array{
     *     hostname?: GatewayRouteHostnameMatch,
     *     metadata?: list<GrpcGatewayRouteMetadata>,
     *     port?: int<1, 65535>,
     *     serviceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
