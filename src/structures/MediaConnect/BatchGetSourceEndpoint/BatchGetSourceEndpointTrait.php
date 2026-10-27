<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetSourceEndpoint;

trait BatchGetSourceEndpointTrait
{
    /**
     * @param BatchGetSourceEndpointRequest $args
     * @return BatchGetSourceEndpointResponse
     */
    public function batchGetSourceEndpoint(BatchGetSourceEndpointRequest $args)
    {
        $result = parent::batchGetSourceEndpoint($args->toArray());
        return new BatchGetSourceEndpointResponse($result->toArray());
    }
}
