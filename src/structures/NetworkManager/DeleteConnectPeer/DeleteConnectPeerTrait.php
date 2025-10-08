<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteConnectPeer;

trait DeleteConnectPeerTrait
{
    /**
     * @param DeleteConnectPeerRequest $args
     * @return DeleteConnectPeerResponse
     */
    public function deleteConnectPeer(DeleteConnectPeerRequest $args)
    {
        $result = parent::deleteConnectPeer($args->toArray());
        return new DeleteConnectPeerResponse($result->toArray());
    }
}
