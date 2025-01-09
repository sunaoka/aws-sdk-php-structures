<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $ConnectionId
 * @property string $LinkId
 * @property string $ConnectedLinkId
 * @property string $Description
 */
class UpdateConnectionRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     ConnectionId: string,
     *     LinkId?: string,
     *     ConnectedLinkId?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
