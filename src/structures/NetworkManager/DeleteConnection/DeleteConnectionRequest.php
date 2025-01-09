<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $ConnectionId
 */
class DeleteConnectionRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     ConnectionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
