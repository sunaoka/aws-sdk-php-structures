<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetSessionEndpoint;

trait GetSessionEndpointTrait
{
    /**
     * @param GetSessionEndpointRequest $args
     * @return GetSessionEndpointResponse
     */
    public function getSessionEndpoint(GetSessionEndpointRequest $args)
    {
        $result = parent::getSessionEndpoint($args->toArray());
        return new GetSessionEndpointResponse($result->toArray());
    }
}
