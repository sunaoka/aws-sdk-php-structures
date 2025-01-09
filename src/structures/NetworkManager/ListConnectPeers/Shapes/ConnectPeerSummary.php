<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListConnectPeers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CoreNetworkId
 * @property string $ConnectAttachmentId
 * @property string $ConnectPeerId
 * @property string $EdgeLocation
 * @property 'CREATING'|'FAILED'|'AVAILABLE'|'DELETING' $ConnectPeerState
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property list<Tag> $Tags
 * @property string $SubnetArn
 */
class ConnectPeerSummary extends Shape
{
    /**
     * @param array{
     *     CoreNetworkId?: string,
     *     ConnectAttachmentId?: string,
     *     ConnectPeerId?: string,
     *     EdgeLocation?: string,
     *     ConnectPeerState?: 'CREATING'|'FAILED'|'AVAILABLE'|'DELETING',
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>,
     *     SubnetArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
