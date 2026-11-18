<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DeleteCoreNetworkEndpoint;

trait DeleteCoreNetworkEndpointTrait
{
    /**
     * @param DeleteCoreNetworkEndpointRequest $args
     * @return DeleteCoreNetworkEndpointResponse
     */
    public function deleteCoreNetworkEndpoint(DeleteCoreNetworkEndpointRequest $args)
    {
        $result = parent::deleteCoreNetworkEndpoint($args->toArray());
        return new DeleteCoreNetworkEndpointResponse($result->toArray());
    }
}
