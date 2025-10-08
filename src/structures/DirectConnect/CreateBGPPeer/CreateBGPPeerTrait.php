<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateBGPPeer;

trait CreateBGPPeerTrait
{
    /**
     * @param CreateBGPPeerRequest $args
     * @return CreateBGPPeerResponse
     */
    public function createBGPPeer(CreateBGPPeerRequest $args)
    {
        $result = parent::createBGPPeer($args->toArray());
        return new CreateBGPPeerResponse($result->toArray());
    }
}
