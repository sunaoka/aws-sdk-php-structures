<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteRouteServerPeer;

trait DeleteRouteServerPeerTrait
{
    /**
     * @param DeleteRouteServerPeerRequest $args
     * @return DeleteRouteServerPeerResponse
     */
    public function deleteRouteServerPeer(DeleteRouteServerPeerRequest $args)
    {
        $result = parent::deleteRouteServerPeer($args->toArray());
        return new DeleteRouteServerPeerResponse($result->toArray());
    }
}
