<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkRoutes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RouteTableArn
 * @property Shapes\CoreNetworkSegmentEdgeIdentifier $CoreNetworkSegmentEdge
 * @property 'TRANSIT_GATEWAY_ROUTE_TABLE'|'CORE_NETWORK_SEGMENT'|'NETWORK_FUNCTION_GROUP' $RouteTableType
 * @property \Aws\Api\DateTimeResult $RouteTableTimestamp
 * @property list<Shapes\NetworkRoute> $NetworkRoutes
 */
class GetNetworkRoutesResponse extends Response
{
}
