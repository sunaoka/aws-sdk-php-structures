<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateManagedEndpoint;

trait CreateManagedEndpointTrait
{
    /**
     * @param CreateManagedEndpointRequest $args
     * @return CreateManagedEndpointResponse
     */
    public function createManagedEndpoint(CreateManagedEndpointRequest $args)
    {
        $result = parent::createManagedEndpoint($args->toArray());
        return new CreateManagedEndpointResponse($result->toArray());
    }
}
