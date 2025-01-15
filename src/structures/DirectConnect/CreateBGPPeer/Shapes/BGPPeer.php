<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateBGPPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bgpPeerId
 * @property int|null $asn
 * @property string|null $authKey
 * @property 'ipv4'|'ipv6'|null $addressFamily
 * @property string|null $amazonAddress
 * @property string|null $customerAddress
 * @property 'verifying'|'pending'|'available'|'deleting'|'deleted'|null $bgpPeerState
 * @property 'up'|'down'|'unknown'|null $bgpStatus
 * @property string|null $awsDeviceV2
 * @property string|null $awsLogicalDeviceId
 */
class BGPPeer extends Shape
{
    /**
     * @param array{
     *     bgpPeerId?: string|null,
     *     asn?: int|null,
     *     authKey?: string|null,
     *     addressFamily?: 'ipv4'|'ipv6'|null,
     *     amazonAddress?: string|null,
     *     customerAddress?: string|null,
     *     bgpPeerState?: 'verifying'|'pending'|'available'|'deleting'|'deleted'|null,
     *     bgpStatus?: 'up'|'down'|'unknown'|null,
     *     awsDeviceV2?: string|null,
     *     awsLogicalDeviceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
