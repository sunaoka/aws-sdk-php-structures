<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayRouteTableArn
 * @property CoreNetworkSegmentEdgeIdentifier|null $CoreNetworkSegmentEdge
 */
class RouteTableIdentifier extends Shape
{
    /**
     * @param array{
     *     TransitGatewayRouteTableArn?: string|null,
     *     CoreNetworkSegmentEdge?: CoreNetworkSegmentEdgeIdentifier|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
