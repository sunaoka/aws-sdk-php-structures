<?php

namespace Sunaoka\Aws\Structures\FSx\CreateClusterPeer;

trait CreateClusterPeerTrait
{
    /**
     * @param CreateClusterPeerRequest $args
     * @return CreateClusterPeerResponse
     */
    public function createClusterPeer(CreateClusterPeerRequest $args)
    {
        $result = parent::createClusterPeer($args->toArray());
        return new CreateClusterPeerResponse($result->toArray());
    }
}
