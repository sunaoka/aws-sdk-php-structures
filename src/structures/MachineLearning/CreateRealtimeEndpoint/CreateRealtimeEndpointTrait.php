<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateRealtimeEndpoint;

trait CreateRealtimeEndpointTrait
{
    /**
     * @param CreateRealtimeEndpointRequest $args
     * @return CreateRealtimeEndpointResponse
     */
    public function createRealtimeEndpoint(CreateRealtimeEndpointRequest $args)
    {
        $result = parent::createRealtimeEndpoint($args->toArray());
        return new CreateRealtimeEndpointResponse($result->toArray());
    }
}
