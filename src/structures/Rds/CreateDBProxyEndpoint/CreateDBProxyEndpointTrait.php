<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBProxyEndpoint;

trait CreateDBProxyEndpointTrait
{
    /**
     * @param CreateDBProxyEndpointRequest $args
     * @return CreateDBProxyEndpointResponse
     */
    public function createDBProxyEndpoint(CreateDBProxyEndpointRequest $args)
    {
        $result = parent::createDBProxyEndpoint($args->toArray());
        return new CreateDBProxyEndpointResponse($result->toArray());
    }
}
