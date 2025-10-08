<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListConnectPeers;

trait ListConnectPeersTrait
{
    /**
     * @param ListConnectPeersRequest $args
     * @return ListConnectPeersResponse
     */
    public function listConnectPeers(ListConnectPeersRequest $args)
    {
        $result = parent::listConnectPeers($args->toArray());
        return new ListConnectPeersResponse($result->toArray());
    }
}
