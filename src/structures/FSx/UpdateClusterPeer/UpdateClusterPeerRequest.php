<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateClusterPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $ClusterPeerId
 * @property string|null $PeerClusterName
 * @property list<string>|null $PeerAddresses
 */
class UpdateClusterPeerRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     ClusterPeerId: string,
     *     PeerClusterName?: string|null,
     *     PeerAddresses?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
