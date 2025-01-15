<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GatewayRouteHostnameMatch|null $hostname
 * @property list<GrpcGatewayRouteMetadata>|null $metadata
 * @property int<1, 65535>|null $port
 * @property string|null $serviceName
 */
class GrpcGatewayRouteMatch extends Shape
{
    /**
     * @param array{
     *     hostname?: GatewayRouteHostnameMatch|null,
     *     metadata?: list<GrpcGatewayRouteMetadata>|null,
     *     port?: int<1, 65535>|null,
     *     serviceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
