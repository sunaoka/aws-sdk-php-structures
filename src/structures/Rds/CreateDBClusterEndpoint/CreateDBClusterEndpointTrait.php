<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBClusterEndpoint;

trait CreateDBClusterEndpointTrait
{
    /**
     * @param CreateDBClusterEndpointRequest $args
     * @return CreateDBClusterEndpointResponse
     */
    public function createDBClusterEndpoint(CreateDBClusterEndpointRequest $args)
    {
        $result = parent::createDBClusterEndpoint($args->toArray());
        return new CreateDBClusterEndpointResponse($result->toArray());
    }
}
