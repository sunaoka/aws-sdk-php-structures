<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetDestinationEndpoint;

trait BatchGetDestinationEndpointTrait
{
    /**
     * @param BatchGetDestinationEndpointRequest $args
     * @return BatchGetDestinationEndpointResponse
     */
    public function batchGetDestinationEndpoint(BatchGetDestinationEndpointRequest $args)
    {
        $result = parent::batchGetDestinationEndpoint($args->toArray());
        return new BatchGetDestinationEndpointResponse($result->toArray());
    }
}
