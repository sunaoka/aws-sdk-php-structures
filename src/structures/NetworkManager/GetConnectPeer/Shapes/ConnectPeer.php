<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetConnectPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CoreNetworkId
 * @property string|null $ConnectAttachmentId
 * @property string|null $ConnectPeerId
 * @property string|null $EdgeLocation
 * @property 'CREATING'|'FAILED'|'AVAILABLE'|'DELETING'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property ConnectPeerConfiguration|null $Configuration
 * @property list<Tag>|null $Tags
 * @property string|null $SubnetArn
 * @property list<ConnectPeerError>|null $LastModificationErrors
 */
class ConnectPeer extends Shape
{
    /**
     * @param array{
     *     CoreNetworkId?: string|null,
     *     ConnectAttachmentId?: string|null,
     *     ConnectPeerId?: string|null,
     *     EdgeLocation?: string|null,
     *     State?: 'CREATING'|'FAILED'|'AVAILABLE'|'DELETING'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Configuration?: ConnectPeerConfiguration|null,
     *     Tags?: list<Tag>|null,
     *     SubnetArn?: string|null,
     *     LastModificationErrors?: list<ConnectPeerError>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
