<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectionId
 * @property string|null $ConnectionArn
 * @property string|null $GlobalNetworkId
 * @property string|null $DeviceId
 * @property string|null $ConnectedDeviceId
 * @property string|null $LinkId
 * @property string|null $ConnectedLinkId
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'UPDATING'|null $State
 * @property list<Tag>|null $Tags
 */
class Connection extends Shape
{
    /**
     * @param array{
     *     ConnectionId?: string|null,
     *     ConnectionArn?: string|null,
     *     GlobalNetworkId?: string|null,
     *     DeviceId?: string|null,
     *     ConnectedDeviceId?: string|null,
     *     LinkId?: string|null,
     *     ConnectedLinkId?: string|null,
     *     Description?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     State?: 'PENDING'|'AVAILABLE'|'DELETING'|'UPDATING'|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
