<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInstanceConnectEndpoint;

trait CreateInstanceConnectEndpointTrait
{
    /**
     * @param CreateInstanceConnectEndpointRequest $args
     * @return CreateInstanceConnectEndpointResponse
     */
    public function createInstanceConnectEndpoint(CreateInstanceConnectEndpointRequest $args)
    {
        $result = parent::createInstanceConnectEndpoint($args->toArray());
        return new CreateInstanceConnectEndpointResponse($result->toArray());
    }
}
