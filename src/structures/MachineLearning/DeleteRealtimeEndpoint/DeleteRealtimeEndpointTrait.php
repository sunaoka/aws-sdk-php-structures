<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DeleteRealtimeEndpoint;

trait DeleteRealtimeEndpointTrait
{
    /**
     * @param DeleteRealtimeEndpointRequest $args
     * @return DeleteRealtimeEndpointResponse
     */
    public function deleteRealtimeEndpoint(DeleteRealtimeEndpointRequest $args)
    {
        $result = parent::deleteRealtimeEndpoint($args->toArray());
        return new DeleteRealtimeEndpointResponse($result->toArray());
    }
}
