<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRouteServerEndpoint;

trait CreateRouteServerEndpointTrait
{
    /**
     * @param CreateRouteServerEndpointRequest $args
     * @return CreateRouteServerEndpointResponse
     */
    public function createRouteServerEndpoint(CreateRouteServerEndpointRequest $args)
    {
        $result = parent::createRouteServerEndpoint($args->toArray());
        return new CreateRouteServerEndpointResponse($result->toArray());
    }
}
