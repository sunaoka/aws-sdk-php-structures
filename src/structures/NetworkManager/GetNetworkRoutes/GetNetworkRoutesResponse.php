<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkRoutes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $RouteTableArn
 * @property Shapes\CoreNetworkSegmentEdgeIdentifier|null $CoreNetworkSegmentEdge
 * @property 'TRANSIT_GATEWAY_ROUTE_TABLE'|'CORE_NETWORK_SEGMENT'|'NETWORK_FUNCTION_GROUP'|null $RouteTableType
 * @property \Aws\Api\DateTimeResult|null $RouteTableTimestamp
 * @property list<Shapes\NetworkRoute>|null $NetworkRoutes
 */
class GetNetworkRoutesResponse extends Response
{
}
