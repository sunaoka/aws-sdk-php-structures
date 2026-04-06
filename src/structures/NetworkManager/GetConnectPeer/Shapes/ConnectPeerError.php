<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetConnectPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EDGE_LOCATION_NO_FREE_IPS'|'EDGE_LOCATION_PEER_DUPLICATE'|'SUBNET_NOT_FOUND'|'IP_OUTSIDE_SUBNET_CIDR_RANGE'|'INVALID_INSIDE_CIDR_BLOCK'|'NO_ASSOCIATED_CIDR_BLOCK'|null $Code
 * @property string|null $Message
 * @property string|null $ResourceArn
 * @property string|null $RequestId
 */
class ConnectPeerError extends Shape
{
    /**
     * @param array{
     *     Code?: 'EDGE_LOCATION_NO_FREE_IPS'|'EDGE_LOCATION_PEER_DUPLICATE'|'SUBNET_NOT_FOUND'|'IP_OUTSIDE_SUBNET_CIDR_RANGE'|'INVALID_INSIDE_CIDR_BLOCK'|'NO_ASSOCIATED_CIDR_BLOCK'|null,
     *     Message?: string|null,
     *     ResourceArn?: string|null,
     *     RequestId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
