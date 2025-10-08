<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DeleteManagedEndpoint;

trait DeleteManagedEndpointTrait
{
    /**
     * @param DeleteManagedEndpointRequest $args
     * @return DeleteManagedEndpointResponse
     */
    public function deleteManagedEndpoint(DeleteManagedEndpointRequest $args)
    {
        $result = parent::deleteManagedEndpoint($args->toArray());
        return new DeleteManagedEndpointResponse($result->toArray());
    }
}
