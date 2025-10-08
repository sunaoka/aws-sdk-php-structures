<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpoint;

trait CreateEndpointTrait
{
    /**
     * @param CreateEndpointRequest $args
     * @return CreateEndpointResponse
     */
    public function createEndpoint(CreateEndpointRequest $args)
    {
        $result = parent::createEndpoint($args->toArray());
        return new CreateEndpointResponse($result->toArray());
    }
}
