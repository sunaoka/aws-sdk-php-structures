<?php

namespace Sunaoka\Aws\Structures\MediaPackage\CreateOriginEndpoint;

trait CreateOriginEndpointTrait
{
    /**
     * @param CreateOriginEndpointRequest $args
     * @return CreateOriginEndpointResponse
     */
    public function createOriginEndpoint(CreateOriginEndpointRequest $args)
    {
        $result = parent::createOriginEndpoint($args->toArray());
        return new CreateOriginEndpointResponse($result->toArray());
    }
}
