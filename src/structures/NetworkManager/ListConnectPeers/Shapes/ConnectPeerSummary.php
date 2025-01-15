<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListConnectPeers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CoreNetworkId
 * @property string|null $ConnectAttachmentId
 * @property string|null $ConnectPeerId
 * @property string|null $EdgeLocation
 * @property 'CREATING'|'FAILED'|'AVAILABLE'|'DELETING'|null $ConnectPeerState
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property list<Tag>|null $Tags
 * @property string|null $SubnetArn
 */
class ConnectPeerSummary extends Shape
{
    /**
     * @param array{
     *     CoreNetworkId?: string|null,
     *     ConnectAttachmentId?: string|null,
     *     ConnectPeerId?: string|null,
     *     EdgeLocation?: string|null,
     *     ConnectPeerState?: 'CREATING'|'FAILED'|'AVAILABLE'|'DELETING'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null,
     *     SubnetArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
