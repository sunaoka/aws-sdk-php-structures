<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\GetDataEndpoint;

trait GetDataEndpointTrait
{
    /**
     * @param GetDataEndpointRequest $args
     * @return GetDataEndpointResponse
     */
    public function getDataEndpoint(GetDataEndpointRequest $args)
    {
        $result = parent::getDataEndpoint($args->toArray());
        return new GetDataEndpointResponse($result->toArray());
    }
}
