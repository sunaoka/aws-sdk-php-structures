<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteClusterPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $ClusterPeerId
 */
class DeleteClusterPeerRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     ClusterPeerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
