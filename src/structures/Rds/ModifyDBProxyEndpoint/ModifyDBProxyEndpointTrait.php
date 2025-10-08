<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBProxyEndpoint;

trait ModifyDBProxyEndpointTrait
{
    /**
     * @param ModifyDBProxyEndpointRequest $args
     * @return ModifyDBProxyEndpointResponse
     */
    public function modifyDBProxyEndpoint(ModifyDBProxyEndpointRequest $args)
    {
        $result = parent::modifyDBProxyEndpoint($args->toArray());
        return new ModifyDBProxyEndpointResponse($result->toArray());
    }
}
