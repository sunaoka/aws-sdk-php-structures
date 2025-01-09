<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateConnectPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EDGE_LOCATION_NO_FREE_IPS'|'EDGE_LOCATION_PEER_DUPLICATE'|'SUBNET_NOT_FOUND'|'IP_OUTSIDE_SUBNET_CIDR_RANGE'|'INVALID_INSIDE_CIDR_BLOCK'|'NO_ASSOCIATED_CIDR_BLOCK' $Code
 * @property string $Message
 * @property string $ResourceArn
 * @property string $RequestId
 */
class ConnectPeerError extends Shape
{
    /**
     * @param array{
     *     Code?: 'EDGE_LOCATION_NO_FREE_IPS'|'EDGE_LOCATION_PEER_DUPLICATE'|'SUBNET_NOT_FOUND'|'IP_OUTSIDE_SUBNET_CIDR_RANGE'|'INVALID_INSIDE_CIDR_BLOCK'|'NO_ASSOCIATED_CIDR_BLOCK',
     *     Message?: string,
     *     ResourceArn?: string,
     *     RequestId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
