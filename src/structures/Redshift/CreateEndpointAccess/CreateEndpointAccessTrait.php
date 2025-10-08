<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateEndpointAccess;

trait CreateEndpointAccessTrait
{
    /**
     * @param CreateEndpointAccessRequest $args
     * @return CreateEndpointAccessResponse
     */
    public function createEndpointAccess(CreateEndpointAccessRequest $args)
    {
        $result = parent::createEndpointAccess($args->toArray());
        return new CreateEndpointAccessResponse($result->toArray());
    }
}
