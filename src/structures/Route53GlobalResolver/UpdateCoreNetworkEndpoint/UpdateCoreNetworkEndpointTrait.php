<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\UpdateCoreNetworkEndpoint;

trait UpdateCoreNetworkEndpointTrait
{
    /**
     * @param UpdateCoreNetworkEndpointRequest $args
     * @return UpdateCoreNetworkEndpointResponse
     */
    public function updateCoreNetworkEndpoint(UpdateCoreNetworkEndpointRequest $args)
    {
        $result = parent::updateCoreNetworkEndpoint($args->toArray());
        return new UpdateCoreNetworkEndpointResponse($result->toArray());
    }
}
