<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteRouteServerEndpoint;

trait DeleteRouteServerEndpointTrait
{
    /**
     * @param DeleteRouteServerEndpointRequest $args
     * @return DeleteRouteServerEndpointResponse
     */
    public function deleteRouteServerEndpoint(DeleteRouteServerEndpointRequest $args)
    {
        $result = parent::deleteRouteServerEndpoint($args->toArray());
        return new DeleteRouteServerEndpointResponse($result->toArray());
    }
}
