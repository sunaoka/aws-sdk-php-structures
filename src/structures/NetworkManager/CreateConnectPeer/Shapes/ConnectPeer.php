<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateConnectPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CoreNetworkId
 * @property string $ConnectAttachmentId
 * @property string $ConnectPeerId
 * @property string $EdgeLocation
 * @property 'CREATING'|'FAILED'|'AVAILABLE'|'DELETING' $State
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property ConnectPeerConfiguration $Configuration
 * @property list<Tag> $Tags
 * @property string $SubnetArn
 * @property list<ConnectPeerError> $LastModificationErrors
 */
class ConnectPeer extends Shape
{
    /**
     * @param array{
     *     CoreNetworkId?: string,
     *     ConnectAttachmentId?: string,
     *     ConnectPeerId?: string,
     *     EdgeLocation?: string,
     *     State?: 'CREATING'|'FAILED'|'AVAILABLE'|'DELETING',
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     Configuration?: ConnectPeerConfiguration,
     *     Tags?: list<Tag>,
     *     SubnetArn?: string,
     *     LastModificationErrors?: list<ConnectPeerError>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
