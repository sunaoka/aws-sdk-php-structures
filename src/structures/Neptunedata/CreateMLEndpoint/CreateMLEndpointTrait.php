<?php

namespace Sunaoka\Aws\Structures\Neptunedata\CreateMLEndpoint;

trait CreateMLEndpointTrait
{
    /**
     * @param CreateMLEndpointRequest $args
     * @return CreateMLEndpointResponse
     */
    public function createMLEndpoint(CreateMLEndpointRequest $args)
    {
        $result = parent::createMLEndpoint($args->toArray());
        return new CreateMLEndpointResponse($result->toArray());
    }
}
