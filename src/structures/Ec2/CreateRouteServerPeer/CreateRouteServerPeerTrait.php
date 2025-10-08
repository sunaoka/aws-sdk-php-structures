<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRouteServerPeer;

trait CreateRouteServerPeerTrait
{
    /**
     * @param CreateRouteServerPeerRequest $args
     * @return CreateRouteServerPeerResponse
     */
    public function createRouteServerPeer(CreateRouteServerPeerRequest $args)
    {
        $result = parent::createRouteServerPeer($args->toArray());
        return new CreateRouteServerPeerResponse($result->toArray());
    }
}
