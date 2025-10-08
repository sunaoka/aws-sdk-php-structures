<?php

namespace Sunaoka\Aws\Structures\NetworkManager\AssociateConnectPeer;

trait AssociateConnectPeerTrait
{
    /**
     * @param AssociateConnectPeerRequest $args
     * @return AssociateConnectPeerResponse
     */
    public function associateConnectPeer(AssociateConnectPeerRequest $args)
    {
        $result = parent::associateConnectPeer($args->toArray());
        return new AssociateConnectPeerResponse($result->toArray());
    }
}
