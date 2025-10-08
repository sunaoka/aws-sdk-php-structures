<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDevEndpoints;

trait BatchGetDevEndpointsTrait
{
    /**
     * @param BatchGetDevEndpointsRequest $args
     * @return BatchGetDevEndpointsResponse
     */
    public function batchGetDevEndpoints(BatchGetDevEndpointsRequest $args)
    {
        $result = parent::batchGetDevEndpoints($args->toArray());
        return new BatchGetDevEndpointsResponse($result->toArray());
    }
}
