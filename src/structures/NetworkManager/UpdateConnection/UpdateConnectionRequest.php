<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $ConnectionId
 * @property string|null $LinkId
 * @property string|null $ConnectedLinkId
 * @property string|null $Description
 */
class UpdateConnectionRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     ConnectionId: string,
     *     LinkId?: string|null,
     *     ConnectedLinkId?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
