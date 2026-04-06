<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateTransitGatewayPeering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRANSIT_GATEWAY_NOT_FOUND'|'TRANSIT_GATEWAY_PEERS_LIMIT_EXCEEDED'|'MISSING_PERMISSIONS'|'INTERNAL_ERROR'|'EDGE_LOCATION_PEER_DUPLICATE'|'INVALID_TRANSIT_GATEWAY_STATE'|null $Code
 * @property string|null $Message
 * @property string|null $ResourceArn
 * @property string|null $RequestId
 * @property PermissionsErrorContext|null $MissingPermissionsContext
 */
class PeeringError extends Shape
{
    /**
     * @param array{
     *     Code?: 'TRANSIT_GATEWAY_NOT_FOUND'|'TRANSIT_GATEWAY_PEERS_LIMIT_EXCEEDED'|'MISSING_PERMISSIONS'|'INTERNAL_ERROR'|'EDGE_LOCATION_PEER_DUPLICATE'|'INVALID_TRANSIT_GATEWAY_STATE'|null,
     *     Message?: string|null,
     *     ResourceArn?: string|null,
     *     RequestId?: string|null,
     *     MissingPermissionsContext?: PermissionsErrorContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
