<?php

namespace Sunaoka\Aws\Structures\Glue\CreateDevEndpoint;

trait CreateDevEndpointTrait
{
    /**
     * @param CreateDevEndpointRequest $args
     * @return CreateDevEndpointResponse
     */
    public function createDevEndpoint(CreateDevEndpointRequest $args)
    {
        $result = parent::createDevEndpoint($args->toArray());
        return new CreateDevEndpointResponse($result->toArray());
    }
}
