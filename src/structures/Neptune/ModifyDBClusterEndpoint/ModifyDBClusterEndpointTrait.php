<?php

namespace Sunaoka\Aws\Structures\Neptune\ModifyDBClusterEndpoint;

trait ModifyDBClusterEndpointTrait
{
    /**
     * @param ModifyDBClusterEndpointRequest $args
     * @return ModifyDBClusterEndpointResponse
     */
    public function modifyDBClusterEndpoint(ModifyDBClusterEndpointRequest $args)
    {
        $result = parent::modifyDBClusterEndpoint($args->toArray());
        return new ModifyDBClusterEndpointResponse($result->toArray());
    }
}
