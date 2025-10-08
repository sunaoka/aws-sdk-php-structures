<?php

namespace Sunaoka\Aws\Structures\Sns\CreatePlatformEndpoint;

trait CreatePlatformEndpointTrait
{
    /**
     * @param CreatePlatformEndpointRequest $args
     * @return CreatePlatformEndpointResponse
     */
    public function createPlatformEndpoint(CreatePlatformEndpointRequest $args)
    {
        $result = parent::createPlatformEndpoint($args->toArray());
        return new CreatePlatformEndpointResponse($result->toArray());
    }
}
