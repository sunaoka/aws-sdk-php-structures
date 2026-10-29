<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AddReplicationPeer;

trait AddReplicationPeerTrait
{
    /**
     * @param AddReplicationPeerRequest $args
     * @return AddReplicationPeerResponse
     */
    public function addReplicationPeer(AddReplicationPeerRequest $args)
    {
        $result = parent::addReplicationPeer($args->toArray());
        return new AddReplicationPeerResponse($result->toArray());
    }
}
