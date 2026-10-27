<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetSourceEndpoint;

trait GetSourceEndpointTrait
{
    /**
     * @param GetSourceEndpointRequest $args
     * @return GetSourceEndpointResponse
     */
    public function getSourceEndpoint(GetSourceEndpointRequest $args)
    {
        $result = parent::getSourceEndpoint($args->toArray());
        return new GetSourceEndpointResponse($result->toArray());
    }
}
