<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteBGPPeer;

trait DeleteBGPPeerTrait
{
    /**
     * @param DeleteBGPPeerRequest $args
     * @return DeleteBGPPeerResponse
     */
    public function deleteBGPPeer(DeleteBGPPeerRequest $args)
    {
        $result = parent::deleteBGPPeer($args->toArray());
        return new DeleteBGPPeerResponse($result->toArray());
    }
}
