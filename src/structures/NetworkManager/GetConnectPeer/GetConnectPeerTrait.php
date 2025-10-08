<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetConnectPeer;

trait GetConnectPeerTrait
{
    /**
     * @param GetConnectPeerRequest $args
     * @return GetConnectPeerResponse
     */
    public function getConnectPeer(GetConnectPeerRequest $args)
    {
        $result = parent::getConnectPeer($args->toArray());
        return new GetConnectPeerResponse($result->toArray());
    }
}
