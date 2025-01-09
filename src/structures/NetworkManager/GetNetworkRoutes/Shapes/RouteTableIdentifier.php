<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayRouteTableArn
 * @property CoreNetworkSegmentEdgeIdentifier $CoreNetworkSegmentEdge
 * @property CoreNetworkNetworkFunctionGroupIdentifier $CoreNetworkNetworkFunctionGroup
 */
class RouteTableIdentifier extends Shape
{
    /**
     * @param array{
     *     TransitGatewayRouteTableArn?: string,
     *     CoreNetworkSegmentEdge?: CoreNetworkSegmentEdgeIdentifier,
     *     CoreNetworkNetworkFunctionGroup?: CoreNetworkNetworkFunctionGroupIdentifier
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
