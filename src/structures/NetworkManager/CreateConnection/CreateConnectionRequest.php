<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $DeviceId
 * @property string $ConnectedDeviceId
 * @property string $LinkId
 * @property string $ConnectedLinkId
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class CreateConnectionRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     DeviceId: string,
     *     ConnectedDeviceId: string,
     *     LinkId?: string,
     *     ConnectedLinkId?: string,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
