<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DisassociateConnectPeer;

trait DisassociateConnectPeerTrait
{
    /**
     * @param DisassociateConnectPeerRequest $args
     * @return DisassociateConnectPeerResponse
     */
    public function disassociateConnectPeer(DisassociateConnectPeerRequest $args)
    {
        $result = parent::disassociateConnectPeer($args->toArray());
        return new DisassociateConnectPeerResponse($result->toArray());
    }
}
