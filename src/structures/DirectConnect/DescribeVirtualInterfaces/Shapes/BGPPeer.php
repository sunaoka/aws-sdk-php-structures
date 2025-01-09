<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeVirtualInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bgpPeerId
 * @property int $asn
 * @property string $authKey
 * @property 'ipv4'|'ipv6' $addressFamily
 * @property string $amazonAddress
 * @property string $customerAddress
 * @property 'verifying'|'pending'|'available'|'deleting'|'deleted' $bgpPeerState
 * @property 'up'|'down'|'unknown' $bgpStatus
 * @property string $awsDeviceV2
 * @property string $awsLogicalDeviceId
 */
class BGPPeer extends Shape
{
    /**
     * @param array{
     *     bgpPeerId?: string,
     *     asn?: int,
     *     authKey?: string,
     *     addressFamily?: 'ipv4'|'ipv6',
     *     amazonAddress?: string,
     *     customerAddress?: string,
     *     bgpPeerState?: 'verifying'|'pending'|'available'|'deleting'|'deleted',
     *     bgpStatus?: 'up'|'down'|'unknown',
     *     awsDeviceV2?: string,
     *     awsLogicalDeviceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
