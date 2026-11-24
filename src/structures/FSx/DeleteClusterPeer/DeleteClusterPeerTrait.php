<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteClusterPeer;

trait DeleteClusterPeerTrait
{
    /**
     * @param DeleteClusterPeerRequest $args
     * @return DeleteClusterPeerResponse
     */
    public function deleteClusterPeer(DeleteClusterPeerRequest $args)
    {
        $result = parent::deleteClusterPeer($args->toArray());
        return new DeleteClusterPeerResponse($result->toArray());
    }
}
