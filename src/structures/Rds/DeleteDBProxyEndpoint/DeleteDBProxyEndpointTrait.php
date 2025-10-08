<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBProxyEndpoint;

trait DeleteDBProxyEndpointTrait
{
    /**
     * @param DeleteDBProxyEndpointRequest $args
     * @return DeleteDBProxyEndpointResponse
     */
    public function deleteDBProxyEndpoint(DeleteDBProxyEndpointRequest $args)
    {
        $result = parent::deleteDBProxyEndpoint($args->toArray());
        return new DeleteDBProxyEndpointResponse($result->toArray());
    }
}
