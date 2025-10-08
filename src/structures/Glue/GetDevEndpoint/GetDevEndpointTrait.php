<?php

namespace Sunaoka\Aws\Structures\Glue\GetDevEndpoint;

trait GetDevEndpointTrait
{
    /**
     * @param GetDevEndpointRequest $args
     * @return GetDevEndpointResponse
     */
    public function getDevEndpoint(GetDevEndpointRequest $args)
    {
        $result = parent::getDevEndpoint($args->toArray());
        return new GetDevEndpointResponse($result->toArray());
    }
}
