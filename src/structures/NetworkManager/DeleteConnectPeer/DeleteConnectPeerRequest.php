<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteConnectPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectPeerId
 */
class DeleteConnectPeerRequest extends Request
{
    /**
     * @param array{ConnectPeerId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
