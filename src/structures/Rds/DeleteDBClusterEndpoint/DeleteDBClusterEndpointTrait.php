<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBClusterEndpoint;

trait DeleteDBClusterEndpointTrait
{
    /**
     * @param DeleteDBClusterEndpointRequest $args
     * @return DeleteDBClusterEndpointResponse
     */
    public function deleteDBClusterEndpoint(DeleteDBClusterEndpointRequest $args)
    {
        $result = parent::deleteDBClusterEndpoint($args->toArray());
        return new DeleteDBClusterEndpointResponse($result->toArray());
    }
}
