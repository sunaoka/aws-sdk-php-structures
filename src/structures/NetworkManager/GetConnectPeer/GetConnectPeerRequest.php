<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetConnectPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectPeerId
 */
class GetConnectPeerRequest extends Request
{
    /**
     * @param array{ConnectPeerId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
