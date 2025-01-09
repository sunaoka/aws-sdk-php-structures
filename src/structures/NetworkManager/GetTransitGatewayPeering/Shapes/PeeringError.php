<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetTransitGatewayPeering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRANSIT_GATEWAY_NOT_FOUND'|'TRANSIT_GATEWAY_PEERS_LIMIT_EXCEEDED'|'MISSING_PERMISSIONS'|'INTERNAL_ERROR'|'EDGE_LOCATION_PEER_DUPLICATE'|'INVALID_TRANSIT_GATEWAY_STATE' $Code
 * @property string $Message
 * @property string $ResourceArn
 * @property string $RequestId
 * @property PermissionsErrorContext $MissingPermissionsContext
 */
class PeeringError extends Shape
{
    /**
     * @param array{
     *     Code?: 'TRANSIT_GATEWAY_NOT_FOUND'|'TRANSIT_GATEWAY_PEERS_LIMIT_EXCEEDED'|'MISSING_PERMISSIONS'|'INTERNAL_ERROR'|'EDGE_LOCATION_PEER_DUPLICATE'|'INVALID_TRANSIT_GATEWAY_STATE',
     *     Message?: string,
     *     ResourceArn?: string,
     *     RequestId?: string,
     *     MissingPermissionsContext?: PermissionsErrorContext
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
