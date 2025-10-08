<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateConnectPeer;

trait CreateConnectPeerTrait
{
    /**
     * @param CreateConnectPeerRequest $args
     * @return CreateConnectPeerResponse
     */
    public function createConnectPeer(CreateConnectPeerRequest $args)
    {
        $result = parent::createConnectPeer($args->toArray());
        return new CreateConnectPeerResponse($result->toArray());
    }
}
