<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $gatewayRouteName
 * @property string $meshName
 * @property ResourceMetadata $metadata
 * @property GatewayRouteSpec $spec
 * @property GatewayRouteStatus $status
 * @property string $virtualGatewayName
 */
class GatewayRouteData extends Shape
{
    /**
     * @param array{
     *     gatewayRouteName: string,
     *     meshName: string,
     *     metadata: ResourceMetadata,
     *     spec: GatewayRouteSpec,
     *     status: GatewayRouteStatus,
     *     virtualGatewayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
