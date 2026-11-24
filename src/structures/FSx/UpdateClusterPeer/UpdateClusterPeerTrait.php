<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateClusterPeer;

trait UpdateClusterPeerTrait
{
    /**
     * @param UpdateClusterPeerRequest $args
     * @return UpdateClusterPeerResponse
     */
    public function updateClusterPeer(UpdateClusterPeerRequest $args)
    {
        $result = parent::updateClusterPeer($args->toArray());
        return new UpdateClusterPeerResponse($result->toArray());
    }
}
