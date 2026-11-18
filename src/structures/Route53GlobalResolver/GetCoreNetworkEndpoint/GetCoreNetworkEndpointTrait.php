<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetCoreNetworkEndpoint;

trait GetCoreNetworkEndpointTrait
{
    /**
     * @param GetCoreNetworkEndpointRequest $args
     * @return GetCoreNetworkEndpointResponse
     */
    public function getCoreNetworkEndpoint(GetCoreNetworkEndpointRequest $args)
    {
        $result = parent::getCoreNetworkEndpoint($args->toArray());
        return new GetCoreNetworkEndpointResponse($result->toArray());
    }
}
