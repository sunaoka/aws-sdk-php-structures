<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateCoreNetworkEndpoint;

trait CreateCoreNetworkEndpointTrait
{
    /**
     * @param CreateCoreNetworkEndpointRequest $args
     * @return CreateCoreNetworkEndpointResponse
     */
    public function createCoreNetworkEndpoint(CreateCoreNetworkEndpointRequest $args)
    {
        $result = parent::createCoreNetworkEndpoint($args->toArray());
        return new CreateCoreNetworkEndpointResponse($result->toArray());
    }
}
