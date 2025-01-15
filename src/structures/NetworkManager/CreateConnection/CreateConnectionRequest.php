<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $DeviceId
 * @property string $ConnectedDeviceId
 * @property string|null $LinkId
 * @property string|null $ConnectedLinkId
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateConnectionRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     DeviceId: string,
     *     ConnectedDeviceId: string,
     *     LinkId?: string|null,
     *     ConnectedLinkId?: string|null,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
