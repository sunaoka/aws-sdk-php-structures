<?php

namespace Sunaoka\Aws\Structures\XRay\BatchGetTraces;

trait BatchGetTracesTrait
{
    /**
     * @param BatchGetTracesRequest $args
     * @return BatchGetTracesResponse
     */
    public function batchGetTraces(BatchGetTracesRequest $args)
    {
        $result = parent::batchGetTraces($args->toArray());
        return new BatchGetTracesResponse($result->toArray());
    }
}
