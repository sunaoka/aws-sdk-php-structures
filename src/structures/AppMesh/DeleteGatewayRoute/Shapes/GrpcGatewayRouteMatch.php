<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GatewayRouteHostnameMatch $hostname
 * @property list<GrpcGatewayRouteMetadata> $metadata
 * @property int $port
 * @property string $serviceName
 */
class GrpcGatewayRouteMatch extends Shape
{
    /**
     * @param array{
     *     hostname?: GatewayRouteHostnameMatch,
     *     metadata?: list<GrpcGatewayRouteMetadata>,
     *     port?: int,
     *     serviceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
