<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectionId
 * @property string $ConnectionArn
 * @property string $GlobalNetworkId
 * @property string $DeviceId
 * @property string $ConnectedDeviceId
 * @property string $LinkId
 * @property string $ConnectedLinkId
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'UPDATING' $State
 * @property list<Tag> $Tags
 */
class Connection extends Shape
{
    /**
     * @param array{
     *     ConnectionId?: string,
     *     ConnectionArn?: string,
     *     GlobalNetworkId?: string,
     *     DeviceId?: string,
     *     ConnectedDeviceId?: string,
     *     LinkId?: string,
     *     ConnectedLinkId?: string,
     *     Description?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     State?: 'PENDING'|'AVAILABLE'|'DELETING'|'UPDATING',
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
