<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\RemoveReplicationPeer;

trait RemoveReplicationPeerTrait
{
    /**
     * @param RemoveReplicationPeerRequest $args
     * @return RemoveReplicationPeerResponse
     */
    public function removeReplicationPeer(RemoveReplicationPeerRequest $args)
    {
        $result = parent::removeReplicationPeer($args->toArray());
        return new RemoveReplicationPeerResponse($result->toArray());
    }
}
